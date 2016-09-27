<?php 

class Upload_cars extends Controller{
	public function index()
	{
		require_once BASEPATH.'app/models/subcategoriesfunction.php';
		require_once BASEPATH.'app/models/placefunction.php';
		$this->loadView('public/car');
	}
} 