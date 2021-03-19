<?php
require_once 'config.php';
session_start();

 if(isset($_POST['submit'])){
     $email=$_POST['email'];
     $password=$_POST['passwoord'];
    $sql ="SELECT * FROM users WHERE Email = '$email' AND Password = '$password' ";
    $result = $conn->query($sql);
    echo $row['F_name'];

 }


?>