<?php 

class Mypost extends Controller{
	public function index()
	{
		require_once BASEPATH.'app/models/itemsfunction.php';
		$this->loadView('public/mypost');
	}
	
}