<?php
$conn=mysqli_connect('localhost','root','','p_lab4_partb');
session_start();
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$department=$_POST['department'];
$roll=$_POST['roll'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$mobilenumber=$_POST['mobilenumber'];
$icecreamflavour=$_POST['icecreamflavour'];
$address=$_POST['address'];
$district=$_POST['district'];
$sql="INSERT INTO info VALUES ('','$firstname','$lastname','$department','$roll','$gender','$email','$mobilenumber','$icecreamflavour','$address','$district')";
if (mysqli_query($conn,$sql)) {
	
	header('location: display.php');
	
}
else{
	header('location: home.php');
}
?>