<?php
class Editbook extends CI_Controller 
{

	public function onsubmit()
	{
		$this->load->helper('form');
		$request_method = strtolower($_SERVER['REQUEST_METHOD']); //put, post, or get
		$data = null;
		$data = json_decode(file_get_contents('php://input'));
		$this->load->model('get_db');
		$this->get_db->edit($data);
	}
	public function delete()
	{
		$request_method = strtolower($_SERVER['REQUEST_METHOD']); //put, post, or get
		$data = null;
		$data = json_decode(file_get_contents('php://input')); //put request, deleted if condition as in add()
		$this->load->model('get_db');
		$this->get_db->delete($data);
	}
}	
?>
