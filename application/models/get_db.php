<?php

class Get_db extends CI_Model
{
	public function getAll()
	{
		$query=$this->db->query("SELECT * from books;");
		return $query->result();
	}
	public function insert($data)
	{
		//$title = $_POST['title'];
		//$author = $_POST['author'];
		//$status = $_POST['status'];
		$title=$data->{'title'};
		$author=$data->{'author'};
		$status=$data->{'status'};
		$this->db->query("INSERT INTO books (title,author,status) VALUES('$title','$author','$status')");
	}
	public function edit($data)
	{
		$id=$data->{'id'};
		$title=$data->{'title'};
		$author=$data->{'author'};
		$status=$data->{'status'};
		$this->db->query("UPDATE books set title='$title', author='$author', status='$status' where id='$id'");
	}
	public function delete($data)
	{
		$pid=$data->{'id'};
		$this->db->query("DELETE from books where id='$pid'");
	}
	public function search($data)
	{
		//$title = $_POST['title'];		
		$title=$data->{'title'};
		$query=$this->db->query("SELECT * from books where title='$title'");
		return $query->row('id');
	}
}
