<?php
$conn=mysqli_connect('localhost','root','','lab4');
session_start();
$firstname=$_POST['first_name'];
$lastname=$_POST['last_name'];
$department=$_POST['department'];
$roll=$_POST['roll'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$mobilenumber=$_POST['mobile'];
$icecreamflavour=$_POST['flavour'];
$address=$_POST['address'];
$district=$_POST['district'];
$sql="INSERT INTO data VALUES ('','$firstname','$lastname','$department','$roll','$gender','$email','$mobilenumber','$icecreamflavour','$address','$district')";
if (mysqli_query($conn,$sql)) {
	
	//header('location: index.php');
	echo "Data Stored Successfully";
}
else{
	//header('location: index.php');
	echo "Data Is not Stored Successfully";
}
?>