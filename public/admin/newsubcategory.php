 <?php 
include('../includes/main_functions.php');
		$categoryname = $_POST['name'];
		$ref = $_POST['ref'];
		$query = "SELECT * FROM subcategories ";
		$check = mysqli_query($con,$query);
		while($row = mysqli_fetch_assoc($check))
		{
			if($categoryname==$row['subcat_name'])
			{
                echo "<script>alert(' This category is arleady created');window.location='new-subcategory.php';</script>";exit;
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
                    $path = '../assets/images/subcategories/' . $new_name;
                    list($width, $height) = getimagesize($_FILES['img']['tmp_name']);
                    if($ext == 'png')
                    {
                	   $new_image = imagecreatefrompng($_FILES['img']['tmp_name']);
                    }
                    if($ext == 'jpeg' || $ext == 'jpg')
                    {
                	   $new_image = imagecreatefromjpeg($_FILES['img']['tmp_name']);
                    }
                    $new_width = 150;
                    $new_height = ($height/$width)*150;
                    $tmp_image = imagecreatetruecolor($new_width, $new_height);
                    imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                    imagejpeg($tmp_image, $path, 100);
                    $photo = $new_name;
                    imagedestroy($new_image);
                    imagedestroy($tmp_image);
			    }
                else
			    {
				    echo "<script>alert(' image size must be less than 1MB ');window.location='new-subcategory.php';</script>";exit;
			    }
		    }
		    else
		    {
			    echo "<script>alert(' invalid image file ');window.location='new-subcategory.php';</script>";exit;
		    }
		
	    }
		
		$res = $cat->insertsubCat($ref,$categoryname,$photo);
		if($res)
			{
                echo "<script>alert(' Sub_Category created successfully ');window.location='dashboard.php';</script>";
			}
		else
			echo "<script>alert(' Error, please try again ');window.location='new-subcategory.php';</script>";exit;
	?>