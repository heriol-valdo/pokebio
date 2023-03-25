<?php
require "includes/common.php";
session_start();

$email = $_POST['aemail'];
$email = mysqli_real_escape_string($con, $email);

$message = $_POST['amessage'];
$message = mysqli_real_escape_string($con, $message);

  

    $quer = "INSERT INTO about(email,message) values('$email','$message')";
    mysqli_query($con, $quer);

    $_SESSION['about'] = $email;

 /*   echo "New record has id: " . mysqli_insert_id($con);
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;*/
    header('location:about.php');
?>
