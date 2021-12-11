<?php
require './connection.php';
session_start();


extract($_POST);

$reg=$_SESSION["reg__"];

$sql = "UPDATE `data_student` SET `serial_no`='$update_sno',`name`='$update_name',`sub1`='$update_sub1',`sub2`='$update_sub2',`sub3`='$update_sub3' WHERE regno='$reg'";

if (mysqli_query($conn, $sql)) {
 header("Location: ./home.php");
 die();
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
?>