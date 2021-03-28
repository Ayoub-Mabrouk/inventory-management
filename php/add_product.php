<?php
require_once 'config.php';
session_start();
require_once 'upload_image.php';

$name= $_POST["name"];
$quantity=$_POST["quantity"];
$brand=$_POST["brand"];
$price=$_POST["price"];
$bc=$_POST["bc"];
$id= $_SESSION['id'];

$sql = "INSERT INTO products (P_name, Barcode, Quantity,Brand,Price, image_url, id_user) 
VALUES
('$name', '$bc', '$quantity', '$brand', '$price', '$file_name', $id)";
$conn->query($sql);
$conn->close();

header("location: ../index.php");


?>