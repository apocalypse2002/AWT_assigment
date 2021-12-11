<?php
require './connection.php';
session_start();


extract($_POST);

$reg=$_POST['data'];
$sql = "SELECT * FROM data_student WHERE regno='$reg'";

$result = $conn->query($sql);


$row = [];
print_r($result);
if ($result->num_rows > 0) {
    unset($_SESSION["no_data_retrieval"]);

    $res = $result->fetch_assoc();

    extract($res);
   

        $_SESSION["reg__"] = $regno;
        $_SESSION["name__"] = $name;
        $_SESSION["sub1__"] = $sub1;
        $_SESSION["sub2__"] = $sub2;
        $_SESSION["sub3__"] = $sub3;
        $_SESSION["avg__"] = ($sub1+$sub2+$sub3)/3;
        header("location: ./Data_Retrieval_.php");
        die();
    
} else {
    unset($_SESSION["reg__"]);
    unset($_SESSION["name__"]);
    unset($_SESSION["avg__"]);
    $_SESSION["error"] = "user not found";
    $_SESSION["no_data_retrieval"]="user not found";
    header("location: ./Data_Retrieval_.php");
    
    exit;
}

$conn->close();
?>