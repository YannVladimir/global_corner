<?php
if(isset($_FILES['main']))
{
    $output['status']=FALSE;
    set_time_limit(0);
    $name= $_FILES['main']['name'];
    $size= $_FILES['main']['size'];
    $ext1 = explode(".", $name);
    $ext = end($ext1);
    $allowed_ext = array("png", "jpeg", "jpg", "PNG", "JPG", "GPEG", "GIF", "gif");
    if(in_array($ext, $allowed_ext))
    {
      if($size < (4194304))
      {
        $new_image = '';
        $new_name = md5(rand()) . '.' . $ext;
        $path ='img/' . $new_name;
        list($width, $height) = getimagesize($_FILES['main']['tmp_name']);
        if($ext == 'png' || $ext == 'PNG')
        {
          $new_image = imagecreatefrompng($_FILES['main']['tmp_name']);
        }
        if($ext == 'gif' || $ext == 'GIF')
        {
          $new_image = imagecreatefromgif($_FILES['main']['tmp_name']);
        }
        if($ext == 'jpeg' || $ext == 'jpg' || $ext == 'JPEG' || $ext == 'JPG')
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
        $output['status']=TRUE;
        $output['image_medium']= $path;
      }
      else
      {
       $output['error']= "You can upload file size up to 4 MB";
       //echo "<script>alert(' image size must be less than 2MB ');window.location='upload.php';</script>";exit;
      }
    }
    else
    {
      $output['error']= "You can only upload JPG, PNG and GIF file";
     // echo "<script>alert(' invalid image file 1');window.location='upload.php';</script>";exit;
    }
echo json_encode($output);
}
?>