<?php
$conn = mysqli_connect('localhost','root','','formdatabase');

session_start();

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$departments=$_POST['dept'];
$roll=$_POST['roll'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$number=$_POST['number'];
$flav=$_POST['flav'];
$address=$_POST['address'];
$district=$_POST['district'];

$sql="INSERT INTO registration VALUES ('','$firstname','$lastname','$departments','$roll','$gender','$email','$mnumber','$flav','$address','$district')";

if(mysqli_query($conn,$sql)){
    header('location: index.php');
    $_SESSION['message']="true";
}


?>