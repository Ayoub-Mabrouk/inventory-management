<?php 
    $conn= new mysqli("localhost","root","toor123","inventory_management" );
 // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
 
 
?>