<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Status extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('user','',TRUE);
	}

	function index() {
		if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['result'] = $this->user->getstatus($data['username']);
			$this->load->view('status_view',$data);
		} else {
			//no session.
			redirect('login','refresh');
		}
	}

	//logout function.
	function logout() {
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('home','refresh');
	}

	//change password.
	function changepw() {
		if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->view('changepw_view',$data);
		} else {
			//no session.
			redirect('login','refresh');
		}
	}

	//check application status.
	function status() {}

}

?>