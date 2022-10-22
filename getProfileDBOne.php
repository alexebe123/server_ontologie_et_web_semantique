<?php 
require_once 'connOne.php';
  $sql = "SELECT * from `profile` ";
  $db_data = array();
  $result = mysqli_query($con, $sql);

    while($row = mysqli_fetch_assoc($result)) {
        $db_data[]  =  $row;
    }
      // Send back the complete records as a json
      header('Content-Type: application/json');
      echo json_encode($db_data);
   //   print_r($db_data);
  $con->close();

?>