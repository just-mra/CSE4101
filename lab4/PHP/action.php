<?php



include('database_connection.php');

if(isset($_POST["action"]))
{
	if($_POST["action"] == "insert")
	{
		$query = "
		INSERT INTO info (id, firstName, lastName, department, gender, email, mobilenumber, faviceflv, address, district) VALUES ('".$_POST["id"]."','".$_POST["firstName"]."', '".$_POST["lastName"]."','".$_POST["department"]."','".$_POST["gender"]."','".$_POST["email"]."','".$_POST["mobilenumber"]."','".$_POST["faviceflv"]."','".$_POST["address"]."','".$_POST["district"]."')
		";
		
		$statement = $connect->prepare($query);

		$statement->execute();


		echo '<p>Data Inserted...</p>';
	}

	if($_POST["action"] == "fetch_single")

	{
		$query = "
		SELECT * FROM info WHERE id = '".$_POST["id"]."'
		";

		$statement = $connect->prepare($query);

		$statement->execute();

		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output['firstName'] = $row['firstName'];
			$output['lastName'] = $row['lastName'];
			$output['department'] = $row['department'];
			$output['gender'] = $row['gender'];
			$output['email'] = $row['email'];
			$output['mobilenumber'] = $row['mobilenumber'];
			$output['faviceflv'] = $row['faviceflv'];
			$output['address'] = $row['address'];
			$output['district'] = $row['district'];
		}
		echo json_encode($output);
	}
	if($_POST["action"] == "update")
	{
		$query = "
		UPDATE info
		SET firstName = '".$_POST["firstName"]."',
		lastName = '".$_POST["lastName"]."'
		department = '".$_POST["department"]."'
		gender = '".$_POST["gender"]."'
		email = '".$_POST["email"]."'
		mobilenumber = '".$_POST["mobilenumber"]."'
		faviceflv = '".$_POST["faviceflv"]."'
		address = ".$_POST["address"]."'
		district = ".$_POST["district"]."'
		WHERE id = '".$_POST["hidden_id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Updated</p>';
	}
	if($_POST["action"] == "delete")
	{
		$query = "DELETE FROM info WHERE id = '".$_POST["id"]."'";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Deleted</p>';
	}
}

?>