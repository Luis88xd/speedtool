<?php 

class SessionController extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->view('Client/Dashboard/Body.php');
	}
}

?>
