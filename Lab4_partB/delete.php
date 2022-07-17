<?php 

$conn=mysqli_connect('localhost','root','','p_lab4_partb');

session_start();

$Id=$_GET['Id'];

$sql="DELETE FROM info WHERE Id=$Id";


if (mysqli_query($conn,$sql)) {
	header('location: display.php');

	$_SESSION['delete']="true";
}

 ?>