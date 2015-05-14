<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class VerifyChangepw extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('user','',TRUE);
	}

	function index() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_update_database');
		$this->form_validation->set_rules('repassword','Re-type Password','trim|required|xss_clean|matches[password]');

		if($this->form_validation->run() == FALSE) {
			//failed. user redirected.
			$this->load->view('changepw_view');
		} else {
			//go to private dashboard.
			redirect('home', 'refresh');
		}
	}

	function update_database($password) {
		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];
		//make database check here.
		$this->db->where('username', $username);
		if($this->db->update('users', array('password' => md5($this->input->post('password'))))) {
			return TRUE;
		} else {
			$this->form_validation->set_message('update_database','Update password failed!');
			return false;
		}
		
	}
}

?>