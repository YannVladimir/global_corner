<?php 
 
class Newcategory extends Controller{
	public function index()
	{
		$this->loadView('admin/category/edit-category');
	}
    public function c()
	{
		require_once BASEPATH.'app/models/maincategoriesfunction.php';
		$cat = new Maincategory();
		$categoryname = $_POST['name'];
		$res = $cat->insertCat($categoryname);
		if($res)
			{
				
                echo "<script>alert(' category created ');</script>";
                header('location: index');exit;
			}
		else
			echo "Error";
	}
}