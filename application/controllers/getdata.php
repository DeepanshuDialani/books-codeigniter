<?php
class GetData extends CI_Controller 
{

	public function index()
	{
		$this->load->helper('form');	
		$request_method = strtolower($_SERVER['REQUEST_METHOD']); 
		$data = null;
		if($request_method=='get')
			$data = json_decode(file_get_contents('php://input'));
		$this->load->model('get_db');
		$data['results']=$this->get_db->getAll();
       		echo json_encode($data['results']); 	
	}
	
}	
?>
