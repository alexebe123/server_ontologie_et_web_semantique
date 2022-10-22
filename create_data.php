<?php 
require_once 'conn.php';
if(isset($_POST["name"])){
$name = $_POST["name"];
   
$sql = "INSERT INTO `test`(`name`) VALUES ('$name')";
mysqli_query($con,$sql);

$con->close();
}

?>
