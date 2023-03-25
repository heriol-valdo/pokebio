<?php
require "includes/common.php";
session_start();

$email = $_POST['nom100'];
$email = mysqli_real_escape_string($con, $email);


$query = "SELECT * from code ";
$result = mysqli_query($con, $query);
$num = mysqli_num_rows($result);
if ($num >= 150) {
    $resultat = "nombre atteint";
     header('location: index.php?error=' . $resultat);
    echo $resultat;

} else{
    $quer = "INSERT INTO code1(code) values('$email')";
    mysqli_query($con, $quer);

     $resultat = "insertion";
      header('location: index.php?error=' . $resultat);
    echo $resultat;
  
}
?>
