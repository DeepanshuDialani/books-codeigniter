<?php
class Editbook extends CI_Controller 
{

	public function index($id)
	{
		$this->load->helper('form');	
		$data['pid']=$id;
		$this->load->view('editbook-view',$data);
	}
	public function onsubmit($id)
	{
		$this->load->model('get_db');
		$this->get_db->edit($id);
		echo "Updated<br />";
		echo anchor('welcome', 'Back');
	}
	public function delete($id)
	{
		$this->load->model('get_db');
		$this->get_db->delete($id);
		echo "Deleted<br />";
		echo anchor('welcome', 'Back');
	}
}	
?>
