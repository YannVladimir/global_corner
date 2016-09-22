<?php 

class Replyform extends Controller{
	public function index()
	{
		require_once BASEPATH.'app/models/messagesfunction.php';
		$this->loadView('admin/message/replyiframe');
	}
	public function introduction()
	{
		$this->loadView('home/introduction');
	}
}