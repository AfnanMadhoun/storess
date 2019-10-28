<?php
$servername="localhost";
$username = "root";
$password ="";
$dbname = "stors";
// $conn =  mysqli_connect($servername,$username,$password);
 $conn = mysqli_connect($servername, $username, $password,$dbname);
 if(!$conn){
     echo "connect failed". mysqli_connect_error();
     
 }
 else
 echo "connected succefully";
?>
