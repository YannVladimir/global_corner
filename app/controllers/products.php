<?php 

class Products extends Controller{
	public function index()
	{
		require_once BASEPATH.'app/models/amacategories.php';
		require_once BASEPATH.'app/models/maincategoriesfunction.php';
		require_once BASEPATH.'app/models/subcategoriesfunction.php';
		require_once BASEPATH.'app/models/itemsfunction.php';
		$this->loadView('public/certain_products');
	}
	
}