<?php
class Addbook extends CI_Controller 
{

	public function index()
	{
		$this->load->helper('form');		
		$this->load->view('addbook-view');
	}
	public function onsubmit()
	{
		$this->load->model('get_db');
		$this->get_db->insert();
		echo "Added<br />";
		echo anchor('welcome', 'Back');
	}
}	
?>
