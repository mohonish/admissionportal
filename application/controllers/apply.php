<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Apply extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('User');
	}
	
	function index() {
		$this->load->helper(array('form'));
		$this->load->view('apply_view');
	}

	function verifyapplication() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[students.email]');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[12]|xss_clean|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|matches[repassword]|md5');
		$this->form_validation->set_rules('repassword', 'Re-enter Password', 'trim|required|xss_clean');
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('gname', 'Guardian Name', 'trim|required|xss_clean');
		//$this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required');
		$this->form_validation->set_rules('stream', 'Stream', 'trim|required|xss_clean');

		if($this->form_validation->run() == FALSE) {
			//failed.
			$this->load->view('apply_view');
		} else {
			//register using model.
			$result = $this->User->apply(
				$this->input->post('email'),
				$this->input->post('username'),
				$this->input->post('password'),
				$this->input->post('fname'),
				$this->input->post('lname'),
				$this->input->post('gname'),
				$this->input->post('stream')
			);
			if($result) {
				//login and send to home page.
				redirect('home', 'refresh');
			} else {
				//db insert failed.
				$this->load->view('apply_view');
			}
		}
	}

}

?>

