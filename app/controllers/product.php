<?php 

class Product extends Controller{
	public function index()
	{
		require_once BASEPATH.'app/models/amacategories.php';
		require_once BASEPATH.'app/models/maincategoriesfunction.php';
		require_once BASEPATH.'app/models/subcategoriesfunction.php';
		require_once BASEPATH.'app/models/itemsfunction.php';
		$id = $_GET['id'];
        $b = new Items();
        $res = $b->selectItem($id);
        while($row = mysqli_fetch_assoc($res))
        {
        	if($row['photo1'] == '')
        	{
        		$this->loadView('public/certain_product_one');
        	}
        	elseif ($row['photo2'] == '')
        	{
        		$this->loadView('public/certain_product_two');
        	}
        	elseif ($row['photo3'] == '')
        	{
        		$this->loadView('public/certain_product_three');
        	}
        	elseif ($row['photo4'] == '')
        	{
        		$this->loadView('public/certain_product_four');
        	}	
        	elseif ($row['photo5'] == '')
        	{
        		$this->loadView('public/certain_product_five');
        	}
        	
        	
        }
		
	}
	
}