<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

session_start();

class Home extends CI_Controller {
	function __construct() {
		parent::__construct();
	}

	function index() {
		if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->view('admin/home_view',$data);
		} else {
			//no session.
			redirect('login','refresh');
		}
	}

	//logout function.
	function logout() {
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('login','refresh');
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

}

?>