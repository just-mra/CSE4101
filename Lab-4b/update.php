<?php
	$request = $_REQUEST; //a PHP Super Global variable which used to collect data after submitting it from the form
	$id = $request['id']; //employee ID we are using it to get the employee record
	$email = $request['email']; //get the date of birth from collected data above
	$fname = $request['first_name']; //get the date of birth from collected data above
	$lname = $request['last_name'];
	$gender = $request['gender'];
	$dept = $request['dept'];
	$roll = $request['roll'];
	$phone = $request['tel'];
	$flavour = $request['flavour'];
	$address = $request['address'];
	$district = $request['district'];

	echo $gender;
	$servername = "localhost"; //set the servername
	$username = "root"; //set the server username
	$password = ""; // set the server password (you must put password here if your using live server)
	$dbname = "demos"; // set the table name

	$mysqli = new mysqli($servername, $username, $password, $dbname);

	if ($mysqli->connect_errno) {
	  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
	  exit();
	}

	// Set the INSERT SQL data
	/*$ice_creame = "";
	foreach ($flavour as $x){
        if(strlen($ice_creame)>0){
            $ice_creame = $ice_creame.' ' .$x;
        }else{
            $ice_creame = $ice_creame.$x;
        }
        
    }*/
	$sql = "UPDATE user SET gender='".$gender."', fname='".$fname."', lname='".$lname."',dept='".$dept."', address='".$address."', district='".$district."', email='".$email."',  phone='".$phone."', roll='".$roll."'  WHERE id='".$id."'";

	// Process the query so that we will save the date of birth
	if ($mysqli->query($sql)) {
	  echo "Employee has been sucessfully updated.";
	} else {
	  return "Error: " . $sql . "<br>" . $mysqli->error;
	}

	// Close the connection after using it
	$mysqli->close();
?>