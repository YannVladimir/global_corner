<?php 

class Contactadmin extends Controller{
	public function index()
	{
		require_once BASEPATH.'app/models/adminfunction.php';
		$this->loadView('admin/admins/contact-admin');
	}
    
}