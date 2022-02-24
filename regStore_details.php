<?php
session_start();
if(isset($_POST['submit']))
{
//  $servername = "localhost";
//  $username = "ias2020";
//  $password = "ecell123";
//  $dbname = "eco21";

 $con = mysqli_connect("localhost","ias2020","ecell123","conso22");
// $conn = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error){
    die("Connection failed: " . $con->connect_error);
}	 

$name=mysqli_real_escape_string($con, $_POST['name']);
$_SESSION['name'] = $name;
$email=mysqli_real_escape_string($con, $_POST['email']);
$phone = mysqli_real_escape_string($con, $_POST['phone']);
// $message = mysqli_real_escape_string($con, $_POST['message']);

  $sql = "INSERT INTO registrations (name, email, phone) VALUES ('$name', '$email','$phone')";
   if ($con->query($sql) === TRUE) {
    header('LOCATION:regThanks.php');
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  } 
}
?>