<?php 

$conn=mysqli_connect('localhost', 'root','', 'web4b');

session_start();

$id=$_GET['id'];

$sql="DELETE FROM registration WHERE id=$id";


if (mysqli_query($conn,$sql)) {
	header('location: display1.php');

	$_SESSION['delete']="true";
}

 ?>