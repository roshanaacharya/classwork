<?php
   $host = "localhost";
   $username = "root";
   $password = "";
   $dbname = "goal";

  $conn = mysqli_connect($host,$username,$password,$dbname);
  
  if(!$conn){
      die("connection failed");
  }
  
  
?>
