<?php 

class DashboardController extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	function index(){
		$data['title'] = 'Panel de control';
		$this->load->view('Client/Includes/Header',$data);
		$this->load->view('Client/Dashboard/Header');
		$this->load->view('Client/Dashboard/Body');
		$this->load->view('Client/Includes/Footer');
	}
}

?>