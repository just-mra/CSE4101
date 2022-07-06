<?php 

$conn=mysqli_connect('localhost','root','','lab4-Part_B');

session_start();

$Id=$_GET['Id'];

$sql="DELETE FROM data WHERE Id=$Id";


if (mysqli_query($conn,$sql)) {
	header('location: display.php');

	$_SESSION['delete']="true";
}

 ?>