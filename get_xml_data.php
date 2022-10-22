<?php 
require_once 'conn.php';
require_once 'model/profile_model.php';
  $sql = "SELECT * from `profile` ";
  $db_data = array();
  $result = mysqli_query($con, $sql);
  $profile = new ProfileModel();

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
     $profile->id = $row['id'];
     $profile->lastname  = $row['lastname'];
     $profile->name  = $row['name'];
     $profile->age = $row['age'];
     $db_data = $profile;
    }
      // Send back the complete records as a json
      echo json_encode($db_data);
      header('Content-Type: application/json');
     
   //   print_r($db_data);
  $con->close();
  return;

?>