<?php
class Addbook extends CI_Controller 
{

	public function index()
	{
		$this->load->helper('form');		
		//$this->load->view('addbook-view');
	}
	public function onsubmit()
	{
		$this->load->helper('form');
		$request_method = strtolower($_SERVER['REQUEST_METHOD']); //put, post, or get
		$data = null;
		if($request_method=='post')
			$data = json_decode(file_get_contents('php://input'));
		$this->load->model('get_db');
		$this->get_db->insert($data); //passing the title as the parameter 
	}
}	
?>
