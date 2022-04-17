<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert & DB Connect</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
		$conn = mysqli_connect("localhost", "root", "", "form");
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
        $department = $_REQUEST['department'];
        $roll = $_REQUEST['roll'];
		$gender = $_REQUEST['gender'];
        $email = $_REQUEST['email'];
        $mobilenumber = $_REQUEST['mobilenumber'];
        $favoriteicecreamflavor = $_REQUEST['favoriteicecreamflavor'];
		$address = $_REQUEST['address'];
        $homedistrict = $_REQUEST['homedistrict'];
		
		$sql = "INSERT INTO Information VALUES ('$first_name',
			'$last_name','$department','$roll','$gender','$email','$mobilenumber','$favoriteicecreamflavor','$address','$homedistrict')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Data stored in a database successfully.</h3>";
            

		} else{
			echo "ERROR!! $sql. "
				. mysqli_error($conn);
        }
		mysqli_close($conn);
	?>
</body>
</html>


