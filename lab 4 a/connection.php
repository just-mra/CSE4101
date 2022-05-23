<?php  
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dept = $_POST['dept'];
$roll = $_POST['roll'];
$gender = $_POST['gender'];
$mail = $_POST['mail'];
$phn = $_POST['phn'];
$flavor = $_POST['flavor'];
$address = $_POST['address'];
$dist = $_POST['dist'];


$sql = "INSERT INTO test (fname,lname,dept,roll,gender,mail,phn, flavor, address, dist) VALUES ('$fname,'$lname','$dept', '$roll','$gender', '$mail','$phn','$flavor','$address','$dist')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>