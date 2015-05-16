<?php

class Admin extends CI_Model {

	function __construct() {
        parent::__construct();
    }

    function viewapplications() { //view all applications.
		$query = $this->db->get('students');
		return $query;
    }

    function getapplication($id) { //gets specific application.
		$this->db->where('id', $id);
		$query = $this->db->get('students');
		return $query;
    }
    
    function setverified($id) {
    	$data = array('verified' => '1');
    	$this->db->where('id',$id);
    	$this->db->update('students',$data);
    	return TRUE;
    }

    function setapplication() {} //sets verified marker. or for saving edits.

}

?>