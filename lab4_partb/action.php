<?php

//action.php

include('database_connection.php');

if(isset($_POST["action"]))
{
	if($_POST["action"] == "insert")
	{
		$query = "
		INSERT INTO info (id, first_name, last_name, department, gender, email, mobilenumber, favoriteicecreamflavor, address, district) VALUES ('".$_POST["id"]."','".$_POST["first_name"]."', '".$_POST["last_name"]."','".$_POST["department"]."','".$_POST["gender"]."','".$_POST["email"]."','".$_POST["mobilenumber"]."','".$_POST["favoriteicecreamflavor"]."','".$_POST["address"]."','".$_POST["district"]."')
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
			$output['first_name'] = $row['first_name'];
			$output['last_name'] = $row['last_name'];
			$output['department'] = $row['department'];
			$output['gender'] = $row['gender'];
			$output['email'] = $row['email'];
			$output['mobilenumber'] = $row['mobilenumber'];
			$output['favoriteicecreamflavor'] = $row['favoriteicecreamflavor'];
			$output['address'] = $row['address'];
			$output['district'] = $row['district'];
		}
		echo json_encode($output);
	}
	if($_POST["action"] == "update")
	{
		$query = "
		UPDATE info
		SET first_name = '".$_POST["first_name"]."',
		last_name = '".$_POST["last_name"]."',
		department = '".$_POST["department"]."',
		gender = '".$_POST["gender"]."',
		email = '".$_POST["email"]."',
		mobilenumber = '".$_POST["mobilenumber"]."',
		favoriteicecreamflavor = '".$_POST["favoriteicecreamflavor"]."',
		address = '".$_POST["address"]."',
		district = '".$_POST["district"]."' 
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