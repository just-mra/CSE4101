
   
<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
    $department = $_POST['department'];
    $roll = $_POST['roll'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$faviceflv = $_POST['faviceflv'];
	$number = $_POST['number'];
    $address = $_POST['address'];
    $district = $_POST['district'];



	// Database connection
	$conn = new mysqli('localhost','root','','Web_Engineering_Lab4');
	if($conn->connect_error){
        echo "failed";
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into PersonalInfoCollect(FirstName, LastName, Department, Roll, Gender, Email, MobileNumber, FavouriteIceCreamFlavour, Address, HomeDistrict) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssssss", $firstName, $lastName, $department, $roll,  $gender, $email, $number, $faviceflv,$address,$district);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>