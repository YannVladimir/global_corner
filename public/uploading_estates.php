<?php
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
//checkUser();
//checkToken();
echo "Uploading, Please wait...";
if(checkIsStringSetPost('izina'))
{
$category = clearInput($_POST['subcategory']);
$seller = clearInput($_POST['name']);
$nam = clearInput($_POST['izina']);
$price = clearInput($_POST['price']);
if($price ==0)
{
    $price = "Negotiatable";
}
if(!$price)
{
  $price = "Negotiatable";
}
$details = clearInput($_POST['details']);
$place = clearInput($_POST['location']);
$contacts = clearInput($_POST['contact']);
$is_rent = clearInput($_POST['rentalorsell']);
$sector = clearInput($_POST['sector']);
$road = clearInput($_POST['road']);
$uploaded = date("Y-m-d");
if(isset($_SESSION['id']))
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
    $allowed_ext = array("png", "PNG", "jpeg", "JPEG", "JPG", "jpg");
    if($name == '')
    {
        $_SESSION['error'] = 'Please select the first image, it is required';
       echo "<script>alert(' Failed to post this ad, please select the first image, it is required. click ok to proceed ');window.location='upload.php?id=1';</script>";exit;

    }
    if(in_array($ext, $allowed_ext))
    {
      if($size < (4194304))
      {
        $new_image = '';
        $new_name = md5(rand()) . '.' . $ext;
        $path ='assets/images/posts/' . $new_name;
        list($width, $height) = getimagesize($_FILES['main']['tmp_name']);
        if($ext == 'png' || $ext =='PNG')
        {
          $new_image = imagecreatefrompng($_FILES['main']['tmp_name']);
        }
        if($ext == 'jpeg' || $ext == 'jpg' || $ext == 'JPEG' || $ext == 'JPG')
        {
          $new_image = imagecreatefromjpeg($_FILES['main']['tmp_name']);
        }
        $new_width = 250;
        $new_height = ($height/$width)*250;
        $tmp_image = imagecreatetruecolor($new_width, $new_height);
        imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        imagejpeg($tmp_image, $path, 100);
        $photo = $new_name;
        imagedestroy($new_image);
        imagedestroy($tmp_image);
      }
      else
      {
        $_SESSION['error'] = 'image size must be less than 4MB for the first image';
        echo "<script>alert(' Failed to post this ad, image size must be less than 4MB');window.location='upload.php?id=5';</script>";exit;
      }
    }
    else
    {
        $_SESSION['error'] = 'Select only jpg,jpeg,png for the first image';
        echo "<script>alert(' Failed to post this ad, please select only jpg,jpeg, and png images ');window.location='upload.php?id=5';</script>";exit;
    }

}
if(isset($_FILES['img1']))
{
    $name= $_FILES['img1']['name'];
    $size= $_FILES['img1']['size'];
    $ext1 = explode(".", $name);
    $ext = end($ext1);
    $allowed_ext = array("png", "PNG", "jpeg", "JPEG", "JPG", "jpg");
    if(in_array($ext, $allowed_ext))
    {
if($size < (4194304))
{
     $new_image = '';
     $new_name = md5(rand()) . '.' . $ext;
     $path ='assets/images/posts/' . $new_name;
     list($width, $height) = getimagesize($_FILES['img1']['tmp_name']);
     if($ext == 'png' || $ext =='PNG')
     {
       $new_image = imagecreatefrompng($_FILES['img1']['tmp_name']);
     }
     if($ext == 'jpeg' || $ext == 'jpg' || $ext == 'JPEG' || $ext == 'JPG')
     {
       $new_image = imagecreatefromjpeg($_FILES['img1']['tmp_name']);
     }
     $new_width = 250;
     $new_height = ($width/$height)*250;
     $tmp_image = imagecreatetruecolor($new_width, $new_height);
     imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
     imagejpeg($tmp_image, $path, 100);
     $img1 = $new_name;
     imagedestroy($new_image);
     imagedestroy($tmp_image);
}
 else
      {
        $_SESSION['error2'] = 'image size must be less than 4MB for the second image';
      }
    }
    else
    {
        $_SESSION['error2'] = 'Select only jpg,jpeg,png for the second image';
    }

}
if(isset($_FILES['img2']))
{
    $name= $_FILES['img2']['name'];
    $size= $_FILES['img2']['size'];
    $ext1 = explode(".", $name);
    $ext = end($ext1);
    $allowed_ext = array("png", "PNG", "jpeg", "JPEG", "JPG", "jpg");
    if(in_array($ext, $allowed_ext))
    {
if($size < (4194304))
{
     $new_image = '';
     $new_name = md5(rand()) . '.' . $ext;
     $path ='assets/images/posts/' . $new_name;
     list($width, $height) = getimagesize($_FILES['img2']['tmp_name']);
     if($ext == 'png' || $ext =='PNG')
     {
       $new_image = imagecreatefrompng($_FILES['img2']['tmp_name']);
     }
     if($ext == 'jpeg' || $ext == 'jpg' || $ext == 'JPEG' || $ext == 'JPG')
     {
       $new_image = imagecreatefromjpeg($_FILES['img2']['tmp_name']);
     }
     $new_width = 250;
     $new_height = ($height/$width)*250;
     $tmp_image = imagecreatetruecolor($new_width, $new_height);
     imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
     imagejpeg($tmp_image, $path, 100);
     $img2 = $new_name;
     imagedestroy($new_image);
     imagedestroy($tmp_image);
}
else
      {
        $_SESSION['error3'] = 'image size must be less than 4MB for the 3rd image';
      }
    }
    else
    {
        $_SESSION['error3'] = 'Select only jpg,jpeg,png for the 3rd image';
    }

}
if(isset($_FILES['img3']))
{
    $name= $_FILES['img3']['name'];
    $size= $_FILES['img3']['size'];
    $ext1 = explode(".", $name);
    $ext = end($ext1);
    $allowed_ext = array("png", "PNG", "jpeg", "JPEG", "JPG", "jpg");
    if(in_array($ext, $allowed_ext))
    {
if($size < (4194304))
{
     $new_image = '';
     $new_name = md5(rand()) . '.' . $ext;
     $path ='assets/images/posts/' . $new_name;
     list($width, $height) = getimagesize($_FILES['img3']['tmp_name']);
     if($ext == 'png' || $ext =='PNG')
     {
       $new_image = imagecreatefrompng($_FILES['img3']['tmp_name']);
     }
     if($ext == 'jpeg' || $ext == 'jpg' || $ext == 'JPEG' || $ext == 'JPG')
     {
       $new_image = imagecreatefromjpeg($_FILES['img3']['tmp_name']);
     }
     $new_width = 250;
     $new_height = ($height/$width)*250;
     $tmp_image = imagecreatetruecolor($new_width, $new_height);
     imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
     imagejpeg($tmp_image, $path, 100);
     $img3 = $new_name;
     imagedestroy($new_image);
     imagedestroy($tmp_image);
}
 else
      {
        $_SESSION['error4'] = 'image size must be less than 4MB for the 4th image';
      }
    }
    else
    {
        $_SESSION['error4'] = 'Select only jpg,jpeg,png for the 4th image';
    }

}
if(isset($_FILES['img4']))
{
    $name= $_FILES['img4']['name'];
    $size= $_FILES['img4']['size'];
    $ext1 = explode(".", $name);
    $ext = end($ext1);
    $allowed_ext = array("png", "PNG", "jpeg", "JPEG", "JPG", "jpg");
    if(in_array($ext, $allowed_ext))
    {
if($size < (4194304))
{
     $new_image = '';
     $new_name = md5(rand()) . '.' . $ext;
     $path ='assets/images/posts/' . $new_name;
     list($width, $height) = getimagesize($_FILES['img4']['tmp_name']);
     if($ext == 'png' || $ext =='PNG')
     {
       $new_image = imagecreatefrompng($_FILES['img4']['tmp_name']);
     }
     if($ext == 'jpeg' || $ext == 'jpg' || $ext == 'JPEG' || $ext == 'JPG')
     {
       $new_image = imagecreatefromjpeg($_FILES['img4']['tmp_name']);
     }
     $new_width = 250;
     $new_height = ($height/$width)*250;
     $tmp_image = imagecreatetruecolor($new_width, $new_height);
     imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
     imagejpeg($tmp_image, $path, 100);
     $img4 = $new_name;
     imagedestroy($new_image);
     imagedestroy($tmp_image);
}
else
      {
        $_SESSION['error5'] = 'image size must be less than 4MB for the 5th image ';
      }
    }
    else
    {
        $_SESSION['error5'] = 'Select only jpg,jpeg,png for the 5th image ';
    }

}

if(isset($_FILES['img5']))
{
    $name= $_FILES['img5']['name'];
    $size= $_FILES['img5']['size'];
    $ext1 = explode(".", $name);
    $ext = end($ext1);
    $allowed_ext = array("png", "PNG", "jpeg", "JPEG", "JPG", "jpg");
    if(in_array($ext, $allowed_ext))
    {
      if($size < (4194304))
      {
        $new_image = '';
        $new_name = md5(rand()) . '.' . $ext;
        $path ='assets/images/posts/' . $new_name;
        list($width, $height) = getimagesize($_FILES['img5']['tmp_name']);
        if($ext == 'png' || $ext =='PNG')
        {
          $new_image = imagecreatefrompng($_FILES['img5']['tmp_name']);
        }
     if($ext == 'jpeg' || $ext == 'jpg' || $ext == 'JPEG' || $ext == 'JPG')
     {
       $new_image = imagecreatefromjpeg($_FILES['img5']['tmp_name']);
     }
     $new_width = 250;
     $new_height = ($height/$width)*250;
     $tmp_image = imagecreatetruecolor($new_width, $new_height);
     imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
     imagejpeg($tmp_image, $path, 100);
     $img5 = $new_name;
     imagedestroy($new_image);
     imagedestroy($tmp_image);
}
 else
      { 
        $_SESSION['error6'] = 'image size must be less than 4MB for the 6th image ';
      }
    }
    else
    {
        $_SESSION['error6'] = 'Select only jpg,jpeg,png for the 6th image';
    }

}

$img6 ='';
$img7 = '';
$query = "INSERT INTO post_photos (main,photo1,photo2,photo3,photo4,photo5,photo6,photo7) values ('{$photo}','{$img1}','{$img2}','{$img3}','{$img4}','{$img5}','{$img6}','{$img7}')";
$yan = mysqli_query($con,$query);
$queryy = "SELECT * FROM post_photos ";
$select = mysqli_query($con,$queryy);
 while($row = mysqli_fetch_assoc($select))
{
   if($photo==$row['main'])
   {
 $refphoto = $row['photo_id'];
 $querry = "INSERT INTO posts (is_rent,sector,street,category,user,seller,name,price,details,place,contacts,uploaded_date,photo) values ('{$is_rent}','{$sector}','{$road}','{$category}','{$user}','{$seller}','{$nam}','{$price}','{$details}','{$place}','{$contacts}','{$uploaded}','{$refphoto}')";
            
 $res = mysqli_query($con,$querry);
 if($res)
 {
        $p = "SELECT * from posts where user = '{$user}' and name = '{$nam}' and seller = '{$seller}' and details = '{$details}'";
        $pe = mysqli_query($con,$p);
        $pes = mysqli_fetch_assoc($pe);
        $a = $pes['id'];
        echo "<script>alert(' Your post has been uploaded successfully, we thank you by the time we are looking for a customer of your product ');window.location='my_post.php?id=$a';</script>";exit;
 }
 else
 {
     echo "<script>alert(' Error while uploading post, please try again ');window.location='upload.php?id=5';</script>";exit;
 }   
}
}
	
	
}
else
{
    
}
?>