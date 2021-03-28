<?php
$file=$_FILES["image"];
$image_name = $_FILES["image"]["name"];
$image_tmp_name =$_FILES["image"]["tmp_name"];

$file_name=uniqid('',true).$image_name;
$file_destination="../product_images/".$file_name;
move_uploaded_file($image_tmp_name,$file_destination);

?>
