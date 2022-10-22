<?php 
require_once 'connOne.php';
if(isset($_POST["id"]) && isset($_POST["lastname"])&& isset($_POST["name"]) && isset($_POST["age"])){
    
     $id = (int)$_POST["id"];
     $lastname = $_POST["lastname"];
     $name = $_POST["name"];
     $age = (int)$_POST["age"];
     $id = filter_var($id,FILTER_SANITIZE_NUMBER_INT );
     $lastname = filter_var($lastname,FILTER_SANITIZE_FULL_SPECIAL_CHARS );
     $name = filter_var($name,FILTER_SANITIZE_FULL_SPECIAL_CHARS );
     $age = filter_var($age,FILTER_SANITIZE_NUMBER_INT );


   
$sql = "INSERT INTO `profile`(`id`, `name`, `lastname`, `age`) VALUES ('$id','$name','$lastname','$age')";
mysqli_query($con,$sql);

}

$con->close();

?>
