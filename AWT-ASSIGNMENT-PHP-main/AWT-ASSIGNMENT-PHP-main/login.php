<?php
session_start();

require './connection.php';
extract($_POST);
if(strlen($username)==0 || strlen($pass)==0){
    $_SESSION["error"] = "user not found";
    header("location: ./login.html");
    exit;
}
$sql = "SELECT * FROM users WHERE regno='$username'";
$result = $conn->query($sql);

$error = "wrong password";
$row = [];

if ($result->num_rows > 0) {
    $res = $result->fetch_assoc();

    extract($res);
    if ($regno == $username && $password == $pass) {

        $_SESSION["reg"] = $regno;
        $_SESSION["email"] = $email;
        $_SESSION["name"] = $name;
        header("location: ./home.php");
        die();
    } else {
        $_SESSION["error"] = $error;
        header("location: ./login.html");
    }
} else {
    $_SESSION["error"] = "user not found";
    header("location: ./login.html");
    exit;
}

$conn->close();
?>