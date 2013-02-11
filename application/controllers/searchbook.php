<?php
class Searchbook extends CI_Controller 
{

	public function index()
	{
		$this->load->helper('form');		
		//$this->load->view('searchbook-view');
	}
	public function onsubmit()
	{
		$this->load->helper('form');	
		$request_method = strtolower($_SERVER['REQUEST_METHOD']); 
		$data = null;
		//if($request_method=='post')
			$data = json_decode(file_get_contents('php://input'));
		$this->load->model('get_db');
		$q=$this->get_db->search($data);
       		echo json_encode(array('id' => $q)); 
		//echo $flag;
		//print_r($flag);
		//this->load->view('showsearch-view',$data);
	}
}	
?>
