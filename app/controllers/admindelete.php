<?php 

class Admindelete extends Controller{
	public function index()
	{
		require_once BASEPATH.'app/models/adminfunction.php';
		$this->loadView('admin/admins/delete');
			$this->fetchRow();
	}
    public function introduction()
	{
		$this->loadView('home/introduction');
	}
	
}