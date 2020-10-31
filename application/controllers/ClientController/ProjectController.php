<?php 

class ProjectController extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('ProjectModel');
	}

	function index(){
		$data['title'] = 'Proyectos';
		$this->load->view('Client/Includes/Header',$data);
		$this->load->view('Client/Project/Header');
		$this->load->view('Client/Project/Body');
		$this->load->view('Client/Includes/Footer');
	}

	function list_project(){
		echo json_encode($this->ProjectModel->list());
	}

	function update_project(){

	}

	function view_project($id){

	}
}

?>
