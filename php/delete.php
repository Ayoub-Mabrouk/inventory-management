<?php
require_once 'config.php';
$id=$_POST["id"];

$sql = "DELETE FROM products WHERE id_product=".$id;

$conn->query($sql);
$conn->close();

header("location: ../index.php");
?>