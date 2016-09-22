<?php 

class Adminedit extends Controller{
	public function index()
	{
		require_once BASEPATH.'app/models/adminfunction.php';
		$this->loadView('admin/admins/edit');
			$this->fetchRow();
	}
    public function introduction()
	{
		$this->loadView('home/introduction');
	}
	
}