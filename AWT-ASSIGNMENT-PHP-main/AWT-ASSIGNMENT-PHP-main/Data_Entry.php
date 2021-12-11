<?php
session_start();
require('./connection.php');
extract($_POST);
$sql = "INSERT INTO `data_student`(`serial_no`, `regno`, `name`, `sub1`, `sub2`, `sub3`) VALUES ('$serial_no','$regno','$Name','$sub1','$sub2','$sub3')";

if (mysqli_query($conn, $sql)) {
  $_SESSION["data_entered__"] = $regno;
 header("Location: ./Data_Entry_.php");
 
 die();
} else {

  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>