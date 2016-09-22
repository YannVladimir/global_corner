<?php 

class Admincontact extends Controller{
	public function index()
	{
		require_once BASEPATH.'app/models/adminfunction.php';
		$this->loadView('admin/admins/contact');
		$this->fetchRow();
	}
    public function introduction()
	{
		$this->loadView('home/introduction');
	}
	    
}