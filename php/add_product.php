<?php
require_once 'config.php';
$name= $_POST["name"];
$quantity=$_POST["quantity"];
$brand=$_POST["brand"];
$price=$_POST["price"];
$owner=$_POST["owner"];
$bc=$_POST["bc"];

$sql = "INSERT INTO products (P_name, Barcode, Quantity,Brand,Price, image_url, id_user) VALUES
('$name', '$bc', '$quantity', '$brand', '$price', ' ', 1)";
$conn->query($sql);
$conn->close();


header("location: ../index.php");

?>