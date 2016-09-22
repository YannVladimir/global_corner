<?php 

class Viewuser extends Controller{
	public function index()
	{
		$this->loadView('admin/user/view-user');
	}

}