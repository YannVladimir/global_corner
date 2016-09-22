<?php 
  
class Newcategory extends Controller{
	public function index()
	{
		$this->loadView('admin/category/new-category');
	}
	public function done()
	{
		header("Location: ".BASEURL."viewcategory");exit;
	}
	public function notdone()
	{
		header("Location: ".BASEURL."newcategory");exit;
	}
    public function createcategory()
	{
		require_once BASEPATH.'app/models/maincategoriesfunction.php';
		$cat = new Maincategory();
		$categoryname = $_POST['name'];
		$check = $cat->selectAllCat();
		while($row = mysqli_fetch_assoc($check))
		{
			if($categoryname==$row['cat_name'])
			{
                echo "<script>alert(' This category is arleady created');window.location='notdone';</script>";exit;
			}
		}
		if(isset($_FILES['img']))
	    {
		    $name= $_FILES['img']['name'];
		    $size= $_FILES['img']['size'];
		    $ext1 = explode(".", $name);
		    $ext = end($ext1);
		    $allowed_ext = array("png", "jpeg", "jpg");
		    if(in_array($ext, $allowed_ext))
		    {
			    if($size < (1024*1024))
			    {
                    $new_image = '';
                    $new_name = md5(rand()) . '.' . $ext;
                    $path = BASEPATH . 'assets/images/categories/' . $new_name;
                    list($width, $height) = getimagesize($_FILES['img']['tmp_name']);
                    if($ext == 'png')
                    {
                	   $new_image = imagecreatefrompng($_FILES['img']['tmp_name']);
                    }
                    if($ext == 'jpeg' || $ext == 'jpg')
                    {
                	   $new_image = imagecreatefromjpeg($_FILES['img']['tmp_name']);
                    }
                    $new_width = 300;
                    $new_height = ($height/$width)*300;
                    $tmp_image = imagecreatetruecolor($new_width, $new_height);
                    imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                    imagejpeg($tmp_image, $path, 100);
                    $photo = $new_name;
                    imagedestroy($new_image);
                    imagedestroy($tmp_image);
			    }
                else
			    {
				    echo "<script>alert(' image size must be less than 1MB ');window.location='notdone';</script>";exit;
			    }
		    }
		    else
		    {
			    echo "<script>alert(' invalid image file ');window.location='notdone';</script>";exit;
		    }
		
	    }
		
		$res = $cat->insertCat($categoryname,$photo);
		if($res)
			{
                echo "<script>alert(' Category created successfully ');window.location='done';</script>";
			}
		else
			echo "<script>alert(' Error, please try again ');window.location='notdone';</script>";exit;
	}
	
}