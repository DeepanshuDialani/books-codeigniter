<?php 

class Welcome extends CI_Controller 
{

	public function index()
	{
		$this->getValues();
	}
	public function getValues()
	{
		$this->load->model('get_db');
		$data['results']=$this->get_db->getAll();
		$this->load->view('homepage',$data);
	}
}
?>

