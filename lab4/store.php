<?php
$conn = mysqli_connect('localhost','root','','web4a');

session_start();

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$departments=$_POST['departments'];
$roll=$_POST['roll'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$mnumber=$_POST['mnumber'];
$flavor=$_POST['flavor'];
$address=$_POST['address'];
$district=$_POST['district'];

$sql="INSERT INTO registration VALUES ('','$fname','$lname','$departments','$roll','$gender','$email','$mnumber','$flavor','$address','$district')";

if(mysqli_query($conn,$sql)){
    header('location: index.php');
    $_SESSION['message']="true";
}


?>