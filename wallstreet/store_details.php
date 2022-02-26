<?php
session_start();
if(isset($_POST['submit_form']))
{
 $servername = "localhost";
 $username = "ias2020";
 $password = "ecell123";
 $dbname = "conso22";
 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}	 
 
$name=mysqli_real_escape_string($conn, $_POST['name']);
$email=mysqli_real_escape_string($conn, $_POST['email']);
$phone=mysqli_real_escape_string($conn, $_POST['phone']);
$college=mysqli_real_escape_string($conn, $_POST['college']);
$course=mysqli_real_escape_string($conn, $_POST['course']);
$year=mysqli_real_escape_string($conn, $_POST['year']);
$_SESSION['name'] = $name;
  $sql = "INSERT INTO wallstreet (name, email, phone, college, course, year) VALUES ('$name', '$email', '$phone','$college', '$course', '$year')";
   if ($conn->query($sql) === TRUE) {
    header('LOCATION:thanks.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  } 
}
?>