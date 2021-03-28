<?php 

require_once 'config.php';
session_start();
if($_POST>0){
    $_SESSION['logged'] =false;
}

header('location: ../login.php');
?>