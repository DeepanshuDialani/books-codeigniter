<?php

class Get_db extends CI_Model
{
	public function getAll()
	{
		$query=$this->db->query("SELECT * from books;");
		return $query->result();
	}
	public function insert()
	{
		$title = $_POST['title'];
		$author = $_POST['author'];
		$status = $_POST['status'];
		$this->db->query("INSERT INTO books (title,author,status) VALUES('$title','$author','$status')");
	}
	public function edit($id)
	{
		$title = $_POST['title'];
		$author = $_POST['author'];
		$status = $_POST['status'];
		$this->db->query("UPDATE books set title='$title', author='$author', status='$status' where id=$id");
	}
	public function delete($id)
	{
		$this->db->query("DELETE from books where id=$id");
	}
	public function search()
	{
		$title = $_POST['title'];		
		$query=$this->db->query("SELECT * from books where title='$title'");
		return $query->result();
	}
}
