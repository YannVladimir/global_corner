<?php  

class Messages extends Controller{
	public function index()
	{
		require_once BASEPATH.'app/models/messagesfunction.php';
		$this->loadView('admin/message/view-messages');
	}
	
}