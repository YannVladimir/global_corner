
<?php 

class Deletecategory extends Controller{
	public function index()
	{ 
		require_once BASEPATH.'app/models/maincategoriesfunction.php';
		$this->loadView('admin/category/delete-category');
	} 
	public function done()
	{
		header("Location: ".BASEURL."viewcategory");exit;
	} 
	public function notdone()
	{
		header("Location: ".BASEURL."deletecategory");exit;
	}
	public function delete()
	{
		require_once BASEPATH.'app/models/maincategoriesfunction.php';
		$cat = new Maincategory();
		$id = $_POST['id'];
		$res = $cat->deleteCat($id);
		if($res)
			{
                echo "<script>alert(' Category deleted successfully ');window.location='done';</script>";
			}
		else
			echo "<script>alert(' Error, please try again ');window.location='notdone';</script>";exit;
	}

}