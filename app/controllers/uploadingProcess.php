<?php 

class UploadingProcess extends Controller{
	
	public function index()
	{
		function clearInput($input)
	    {
           return mysqli_real_escape_string(mysqli_connect("localhost","root","","eshopper"),htmlentities($input));
	    }
		require_once BASEPATH.'app/models/photofunction.php';
		require_once BASEPATH.'app/models/postfunction.php';
		$p = new Post();
		$s = new Photos();
		$category = clearInput($_POST['subcategory']);
        $seller = clearInput($_POST['name']);
        $nam = clearInput($_POST['izina']);
        $price = clearInput($_POST['price']);
        $details = clearInput($_POST['details']);
        $place = clearInput($_POST['location']);
        $contacts = clearInput($_POST['contact']);
        $uploaded = date("Y-m-d");
        if($_SESSION)
        {
        	$user = $_SESSION['id'];
        }
        else
        {
        	$user = 1;
        }

        if(isset($_FILES['main']))
	    {
		    $name= $_FILES['main']['name'];
		    $size= $_FILES['main']['size'];
		    $ext1 = explode(".", $name);
		    $ext = end($ext1);
		    $allowed_ext = array("png", "jpeg", "jpg");
		    if(in_array($ext, $allowed_ext))
		    {
			    if($size < (1024*1024))
			    {
                    $new_image = '';
                    $new_name = md5(rand()) . '.' . $ext;
                    $path = BASEPATH . 'assets/images/posts/' . $new_name;
                    list($width, $height) = getimagesize($_FILES['main']['tmp_name']);
                    if($ext == 'png')
                    {
                	   $new_image = imagecreatefrompng($_FILES['main']['tmp_name']);
                    }
                    if($ext == 'jpeg' || $ext == 'jpg')
                    {
                	   $new_image = imagecreatefromjpeg($_FILES['main']['tmp_name']);
                    }
                    $new_height = 300;
                    $new_width = ($width/$height)*300;
                    $tmp_image = imagecreatetruecolor($new_width, $new_height);
                    imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                    imagejpeg($tmp_image, $path, 100);
                    $photo = $new_name;
                    imagedestroy($new_image);
                    imagedestroy($tmp_image);
			    }
                else
			    {
				    echo "<script>alert(' image size must be less than 1MB ');window.location='upload';</script>";exit;
			    }
		    }
		    else
		    {
			    echo "<script>alert(' invalid image file 1');window.location='upload';</script>";exit;
		    }

		}
		if(isset($_FILES['img1']))
	    {
		    $name= $_FILES['img1']['name'];
		    $size= $_FILES['img1']['size'];
		    $ext1 = explode(".", $name);
		    $ext = end($ext1);
		    $allowed_ext = array("png", "jpeg", "jpg");
		    if(in_array($ext, $allowed_ext))
		    {
			    if($size < (1024*1024))
			    {
                    $new_image = '';
                    $new_name = md5(rand()) . '.' . $ext;
                    $path = BASEPATH . 'assets/images/posts/' . $new_name;
                    list($width, $height) = getimagesize($_FILES['img1']['tmp_name']);
                    if($ext == 'png')
                    {
                	   $new_image = imagecreatefrompng($_FILES['img1']['tmp_name']);
                    }
                    if($ext == 'jpeg' || $ext == 'jpg')
                    {
                	   $new_image = imagecreatefromjpeg($_FILES['img1']['tmp_name']);
                    }
                    $new_height = 300;
                    $new_width = ($height/$width)*300;
                    $tmp_image = imagecreatetruecolor($new_width, $new_height);
                    imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                    imagejpeg($tmp_image, $path, 100);
                    $img1 = $new_name;
                    imagedestroy($new_image);
                    imagedestroy($tmp_image);
			    }
                else
			    {
				    $img1= '';
			    }
		    }
		    else
		    {
			    $img1= '';
            }

		}
		if(isset($_FILES['img2']))
	    {
		    $name= $_FILES['img2']['name'];
		    $size= $_FILES['img2']['size'];
		    $ext1 = explode(".", $name);
		    $ext = end($ext1);
		    $allowed_ext = array("png", "jpeg", "jpg");
		    if(in_array($ext, $allowed_ext))
		    {
			    if($size < (1024*1024))
			    {
                    $new_image = '';
                    $new_name = md5(rand()) . '.' . $ext;
                    $path = BASEPATH . 'assets/images/posts/' . $new_name;
                    list($width, $height) = getimagesize($_FILES['img2']['tmp_name']);
                    if($ext == 'png')
                    {
                	   $new_image = imagecreatefrompng($_FILES['img2']['tmp_name']);
                    }
                    if($ext == 'jpeg' || $ext == 'jpg')
                    {
                	   $new_image = imagecreatefromjpeg($_FILES['img2']['tmp_name']);
                    }
                    $new_width = 300;
                    $new_height = ($height/$width)*300;
                    $tmp_image = imagecreatetruecolor($new_width, $new_height);
                    imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                    imagejpeg($tmp_image, $path, 100);
                    $img2 = $new_name;
                    imagedestroy($new_image);
                    imagedestroy($tmp_image);
			    }
                else
			    {
				    $img2= '';
                }
		    }
		    else
		    {
			    $img2= '';
            }

		}
		if(isset($_FILES['img3']))
	    {
		    $name= $_FILES['img3']['name'];
		    $size= $_FILES['img3']['size'];
		    $ext1 = explode(".", $name);
		    $ext = end($ext1);
		    $allowed_ext = array("png", "jpeg", "jpg");
		    if(in_array($ext, $allowed_ext))
		    {
			    if($size < (1024*1024))
			    {
                    $new_image = '';
                    $new_name = md5(rand()) . '.' . $ext;
                    $path = BASEPATH . 'assets/images/posts/' . $new_name;
                    list($width, $height) = getimagesize($_FILES['img3']['tmp_name']);
                    if($ext == 'png')
                    {
                	   $new_image = imagecreatefrompng($_FILES['img3']['tmp_name']);
                    }
                    if($ext == 'jpeg' || $ext == 'jpg')
                    {
                	   $new_image = imagecreatefromjpeg($_FILES['img3']['tmp_name']);
                    }
                    $new_width = 300;
                    $new_height = ($height/$width)*300;
                    $tmp_image = imagecreatetruecolor($new_width, $new_height);
                    imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                    imagejpeg($tmp_image, $path, 100);
                    $img3 = $new_name;
                    imagedestroy($new_image);
                    imagedestroy($tmp_image);
			    }
                else
			    {
				    $img3= '';
                }
		    }
		    else
		    {
			    $img3= '';
            }

		}
		if(isset($_FILES['img4']))
	    {
		    $name= $_FILES['img4']['name'];
		    $size= $_FILES['img4']['size'];
		    $ext1 = explode(".", $name);
		    $ext = end($ext1);
		    $allowed_ext = array("png", "jpeg", "jpg");
		    if(in_array($ext, $allowed_ext))
		    {
			    if($size < (1024*1024))
			    {
                    $new_image = '';
                    $new_name = md5(rand()) . '.' . $ext;
                    $path = BASEPATH . 'assets/images/posts/' . $new_name;
                    list($width, $height) = getimagesize($_FILES['img4']['tmp_name']);
                    if($ext == 'png')
                    {
                	   $new_image = imagecreatefrompng($_FILES['img4']['tmp_name']);
                    }
                    if($ext == 'jpeg' || $ext == 'jpg')
                    {
                	   $new_image = imagecreatefromjpeg($_FILES['img4']['tmp_name']);
                    }
                    $new_width = 300;
                    $new_height = ($height/$width)*300;
                    $tmp_image = imagecreatetruecolor($new_width, $new_height);
                    imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                    imagejpeg($tmp_image, $path, 100);
                    $img4 = $new_name;
                    imagedestroy($new_image);
                    imagedestroy($tmp_image);
			    }
                else
			    {
				   $img4= '';
                }
		    }
		    else
		    {
			    $img4= '';}

		}
		
		if(isset($_FILES['img5']))
	    {
		    $name= $_FILES['img5']['name'];
		    $size= $_FILES['img5']['size'];
		    $ext1 = explode(".", $name);
		    $ext = end($ext1);
		    $allowed_ext = array("png", "jpeg", "jpg");
		    if(in_array($ext, $allowed_ext))
		    {
			    if($size < (1024*1024))
			    {
                    $new_image = '';
                    $new_name = md5(rand()) . '.' . $ext;
                    $path = BASEPATH . 'assets/images/posts/' . $new_name;
                    list($width, $height) = getimagesize($_FILES['img5']['tmp_name']);
                    if($ext == 'png')
                    {
                	   $new_image = imagecreatefrompng($_FILES['img5']['tmp_name']);
                    }
                    if($ext == 'jpeg' || $ext == 'jpg')
                    {
                	   $new_image = imagecreatefromjpeg($_FILES['img5']['tmp_name']);
                    }
                    $new_width = 300;
                    $new_height = ($height/$width)*300;
                    $tmp_image = imagecreatetruecolor($new_width, $new_height);
                    imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                    imagejpeg($tmp_image, $path, 100);
                    $img5 = $new_name;
                    imagedestroy($new_image);
                    imagedestroy($tmp_image);
			    }
                else
			    {
				    $img5= '';
                }
		    }
		    else
		    {
			    $img5= '';
            }

		}
		if(isset($_FILES['img6']))
	    {
		    $name= $_FILES['img6']['name'];
		    $size= $_FILES['img6']['size'];
		    $ext1 = explode(".", $name);
		    $ext = end($ext1);
		    $allowed_ext = array("png", "jpeg", "jpg");
		    if(in_array($ext, $allowed_ext))
		    {
			    if($size < (1024*1024))
			    {
                    $new_image = '';
                    $new_name = md5(rand()) . '.' . $ext;
                    $path = BASEPATH . 'assets/images/posts/' . $new_name;
                    list($width, $height) = getimagesize($_FILES['img6']['tmp_name']);
                    if($ext == 'png')
                    {
                	   $new_image = imagecreatefrompng($_FILES['img6']['tmp_name']);
                    }
                    if($ext == 'jpeg' || $ext == 'jpg')
                    {
                	   $new_image = imagecreatefromjpeg($_FILES['img6']['tmp_name']);
                    }
                    $new_width = 300;
                    $new_height = ($height/$width)*300;
                    $tmp_image = imagecreatetruecolor($new_width, $new_height);
                    imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                    imagejpeg($tmp_image, $path, 100);
                    $img6 = $new_name;
                    imagedestroy($new_image);
                    imagedestroy($tmp_image);
			    }
                else
			    {
				    $img6= '';
                }
		    }
		    else
		    {
			    $img6= '';
            }

		}
		if(isset($_FILES['img7']))
	    {
		    $name= $_FILES['img7']['name'];
		    $size= $_FILES['img7']['size'];
		    $ext1 = explode(".", $name);
		    $ext = end($ext1);
		    $allowed_ext = array("png", "jpeg", "jpg");
		    if(in_array($ext, $allowed_ext))
		    {
			    if($size < (1024*1024))
			    {
                    $new_image = '';
                    $new_name = md5(rand()) . '.' . $ext;
                    $path = BASEPATH . 'assets/images/posts/' . $new_name;
                    list($width, $height) = getimagesize($_FILES['img7']['tmp_name']);
                    if($ext == 'png')
                    {
                	   $new_image = imagecreatefrompng($_FILES['img7']['tmp_name']);
                    }
                    if($ext == 'jpeg' || $ext == 'jpg')
                    {
                	   $new_image = imagecreatefromjpeg($_FILES['img7']['tmp_name']);
                    }
                    $new_width = 300;
                    $new_height = ($height/$width)*300;
                    $tmp_image = imagecreatetruecolor($new_width, $new_height);
                    imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                    imagejpeg($tmp_image, $path, 100);
                    $img7 = $new_name;
                    imagedestroy($new_image);
                    imagedestroy($tmp_image);
			    }
                else
			    {
				    $img7= '';
                }
		    }
		    else
		    {
			    $img7= '';
            }

		}

		$insphoto = $s->insertPhoto($photo,$img1,$img2,$img3,$img4,$img5,$img6,$img7);
		$select = $s->selectPhoto();
                while($row = mysqli_fetch_assoc($select))
		        {
			       if($photo==$row['main'])
			       {
                       $refphoto = $row['photo_id'];
                       $res = $p->insertPost($category,$user,$seller,$nam,$price,$details,$place,$contacts,$uploaded,$refphoto);
                       if($res)
                       {
                       	 echo "<script>alert(' Your post has been uploaded successfully, please view your post and confirm ');window.location='home';</script>";exit;
                       }
                       else
                       {
                       	 echo "<script>alert(' Error while uploading post, please try again ');window.location='upload';</script>";exit;
                       }       
			       }
		        }
	}
	public function done()
	{
		header("Location: ".BASEURL."home");exit;
	}
	public function notdone()
	{
		header("Location: ".BASEURL."upload");exit;
	}
}