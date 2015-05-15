<?php

class Admin extends CI_Model {

	function __construct() {
        parent::__construct();
    }

    function viewapplications() {} //view all applications.

    function getapplication() {} //gets specific application.
    
    function setapplication() {} //sets verified marker. or for saving edits.

}

?>