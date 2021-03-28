<?php
require_once 'config.php';
session_start();

 if(isset($_POST['submit'])){
     $email=$_POST['email'];
     $password=$_POST['password'];
    
    $sql ="SELECT * FROM users WHERE Email = '$email' AND Password = '$password' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $rowcount=mysqli_num_rows($result);
    if($rowcount==1){
        $_SESSION['name']=$row['F_name'];
        $_SESSION['id']=$row['id'];
        $_SESSION['profile_img']="users/".$row['profile_img'];
        $_SESSION['logged']=true;
        header('location: ../index.php');
    }
    else {
        header('location: ../login.php');
    }

 }


?>