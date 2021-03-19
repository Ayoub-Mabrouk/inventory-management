<?php
require_once 'config.php';
$id=$_POST["id"];
$name= $_POST["name"];
$quantity=$_POST["quantity"];
$brand=$_POST["brand"];
$price=$_POST["price"];
$owner=$_POST["owner"];
$bc=$_POST["bc"];

$sql = "UPDATE  products SET P_name='$name', Barcode='$bc', Quantity='$quantity',Brand='$brand',Price='$price', image_url='' WHERE id_product=$id";
$conn->query($sql);
$conn->close();


header("location: ../index.php");

?>