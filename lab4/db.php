<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

    $fName = $_POST['firstName'];
	$lName = $_POST['lastName'];
    $dept = $_POST['department'];
    $roll = $_POST['roll'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$faviceflv = $_POST['faviceflv'];
	$number = $_POST['number'];
    $address = $_POST['address'];
    $district = $_POST['district'];

    $stmt = $conn->prepare("insert into PersonalInfoCollect(FirstName, LastName, Department, Roll, Gender, Email, MobileNumber, FavouriteIceCreamFlavour, Address, HomeDistrict) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("k", $fName, $lName, $dept, $roll,  $gender, $email, $number, $faviceflv,$address,$district);
	$execval = $stmt->execute();
	echo $execval;
	echo "Registration successfully...";
	$stmt->close();
	$conn->close();
?>