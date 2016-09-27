<?php  
 class Newadmin extends Controller{
	public function index() 
	{
		require_once BASEPATH.'app/models/userfunction.php';
		$this->loadView('admin/admins/new-admin');
	}
	public function create()
	{
		require_once BASEPATH.'app/models/userfunction.php';
		$admin = new User();
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$number = $_POST['contact'];
		$password = substr(md5(rand()),0,7);
		$date = date("Y-m-d");
		$res = $admin->insertNewAdmin($firstname,$lastname,$email,$number,$password,$date);
		if($res)
			{
                echo "<script>alert(' Admin created ');window.location='index';</script>";
			}
		else
			echo "Error";
	}
}