<?php
require_once 'config.php';







$id=$_POST["id"];
$name= $_POST["name"];
$quantity=$_POST["quantity"];
$brand=$_POST["brand"];
$price=$_POST["price"];
$bc=$_POST["bc"];

if($_FILES["image"]["name"]==""){
    $sql = "UPDATE  products SET P_name='$name', Barcode='$bc', Quantity='$quantity',Brand='$brand',Price='$price' WHERE id_product=$id";
}
else {
    include 'upload_image.php';
    $sql = "UPDATE  products SET P_name='$name', Barcode='$bc', Quantity='$quantity',Brand='$brand',Price='$price', image_url='$file_name' WHERE id_product=$id";
}

$conn->query($sql);
$conn->close();


header("location: ../index.php");

?>