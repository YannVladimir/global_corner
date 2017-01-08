<?php
if(isset($_FILES['main']))
{
    $name= $_FILES['main']['name'];
    $size= $_FILES['main']['size'];
    $ext1 = explode(".", $name);
    $ext = end($ext1);
    $allowed_ext = array("png", "jpeg", "jpg");
    if(in_array($ext, $allowed_ext))
    {
      if($size < (4194304))
      {
        $new_image = '';
        $new_name = md5(rand()) . '.' . $ext;
        $path ='assets/images/posts/' . $new_name;
        list($width, $height) = getimagesize($_FILES['main']['tmp_name']);
        if($ext == 'png')
        {
 	      $new_image = imagecreatefrompng($_FILES['main']['tmp_name']);
        }
        if($ext == 'jpeg' || $ext == 'jpg')
        {
 	      $new_image = imagecreatefromjpeg($_FILES['main']['tmp_name']);
        }
        $new_height = 250;
        $new_width = ($width/$height)*250;
        $tmp_image = imagecreatetruecolor($new_width, $new_height);
        imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        imagejpeg($tmp_image, $path, 100);
        $photo = $new_name;
        imagedestroy($new_image);
        imagedestroy($tmp_image);
        echo "uploaded";
      }
      else
      {
        echo "image size must be less than 4MB";
       //echo "<script>alert(' image size must be less than 2MB ');window.location='upload.php';</script>";exit;
      }
    }
    else
    {
        echo "invalid image file";
     // echo "<script>alert(' invalid image file 1');window.location='upload.php';</script>";exit;
    }

}
?>