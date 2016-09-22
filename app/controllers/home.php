<?php 
 
class Home extends Controller{
	public function index() 
	{
		require_once BASEPATH.'app/models/amacategories.php';
		require_once BASEPATH.'app/models/maincategoriesfunction.php';
		require_once BASEPATH.'app/models/subcategoriesfunction.php';
		$this->loadView('public/globalhome');
	}
	
}