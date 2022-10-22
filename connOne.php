<?php
$localhost = "localhost";
$user= "root";
$dbname = "ontologie_et_web_semantique";
$password = "";

$con = mysqli_connect($localhost,$user,$password,$dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
?>