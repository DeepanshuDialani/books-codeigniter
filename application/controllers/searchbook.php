<?php
class Searchbook extends CI_Controller 
{

	public function index()
	{
		$this->load->helper('form');		
		$this->load->view('searchbook-view');
	}
	public function onsubmit()
	{
		$this->load->model('get_db');
		$data['results']=$this->get_db->search();
		$this->load->view('showsearch-view',$data);
	}
}	
?>
