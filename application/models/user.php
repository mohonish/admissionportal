<?php

class User extends CI_Model {

	function __construct() {
        parent::__construct();
    }

	function login($username, $password) {
		$this->db->select('id, username, password');
		//$this->db->from('users');
		$this->db->where('username', $username);
		$this->db->where('password', MD5($password));
		$this->db->limit(1);

		$query = $this->db->get('users');

		if($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}

	function apply($email, $username, $password, $fname, $lname, $gname, $stream) {
		//add student info to users table and students table.
		$data = array(
			'username' => $username,
			'password' => $password
			);
		$this->db->insert('users',$data);

		$this->db->select('id');
		$this->db->where('username', $username);
		$this->db->limit(1);

		$query = $this->db->get('users');
		$uid = $query->result();
		
		$data = array(
			'uid' => $uid[0]->id,
			'email' => $email,
			'fname' => $fname,
			'lname' => $lname,
			'gname' => $gname,
			//'dob' => date('YYYY-MM-DD', strtotime($dob)),
			'stream' => $stream,
			'verified' => '0'
			);
		if($this->db->insert('students',$data)) {
			return TRUE;
		} else {
			return FALSE;
		}

	}

	function getstatus($username) {
		$this->db->select('id');
		$this->db->where('username', $username);
		$this->db->limit(1);

		$query = $this->db->get('users');
		$uid = $query->result();

		//var_dump($uid);

		$this->db->select('verified');
		$this->db->where('uid',$uid[0]->id);
		$query2 = $this->db->get('students');
		$status = $query2->result();

		//var_dump($status[0]);

		return $status[0]->verified;
	}
}

?>