<?php  

class Dashboard extends Controller{
	public function index()
	{
		require_once BASEPATH.'app/models/userfunction.php';
		require_once BASEPATH.'app/models/messagesfunction.php';
		require_once BASEPATH.'app/models/postfunction.php';
		$this->loadView('admin/index');
	}
	
}