<?php 

class Admins extends Controller{
	public function index()
	{
		$this->loadView('admin/admins/admin');
	}
    public function introduction()
	{
		$this->loadView('home/introduction');
	}
}