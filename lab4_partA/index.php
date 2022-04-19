<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Lab4_Part_A</title>
		<link rel="stylesheet" href="">
	</head>
	<style>
		
		body{
			margin-left: 30%;
			margin-top: 60px;
			margin-right: 30%;
			background-color: cyan;
		}
		.form{
			background-color: lightblue;
			padding: 20px ;
		}
		.header{
			text-align: center;
			color: crimson;
			background-color: white;
			line-height: 40px;
		}
		select{
			margin-top: 10px ;
			width: 102%;
			height: 25px;
		}
		input{
			margin-top: 10px ;
			width: 100%;
			height: 20px;
		}
		.submit{
			width: 102%;
			height: 30px;
			background-color: green ;
			color: white ;
		}
	</style>
	<body>
		<div class="main">
			<div class="header">
				<h2>This is a HTML Form </h2>
			</div>
			<div class="form">
				<form action="confirm_store.php" method="post" class="frm">
					<input type="text" name="first_name" placeholder="Enter your First Name"><br>
					<input type="text" name="last_name" placeholder="Enter your Last Name"><br>
					<select class="department" name="department">
						<option disabled selected>Select Department</option>
						<option value="CSE">CSE</option>
						<option value="EEE">EEE</option>
						<option value="IPE">IPE</option>
						<option value="ChE">ChE</option>
						<option value="BME">BME</option>
						<option value="PME">PME</option>
						<option value="TE">TE</option>
					</select><br>
					<input type="text" name="roll" placeholder="Enter your Roll No"><br>
					<select class="gender" name="gender">
						<option disabled selected>Select Gender</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
						<option value="other">Other</option>
					</select><br>
					<input type="email" name="email" placeholder="Enter your Email"><br>
					<input type="text" name="mobile" placeholder="Enter your Mobile Number"><br>
					<select class="flavour" name="flavour">
						<option disabled selected>Favourite Ice Cream Flavour</option>
						<option value="Chocolate">Chocolate</option>
						<option value="Vanilla">Vanilla</option>
						<option value="Banana">Banana</option>
						<option value="Toffee">Toffee</option>
						<option value="Strawberry">Strawberry</option>
						<option value="Orange">orange</option>
						<option value="Blackberry">Blackberry</option>
					</select><br>
					<input type="text" name="address" placeholder="Enter your Address"><br>
					<select class="district" name="district">
						<option disabled selected>Select Home District</option>
						<option value="Bagerhat">Bagerhat</option>
						<option value="Bandarban">Bandarban</option>
						<option value="Barguna">Barguna</option>
						<option value="Barisal">Barisal</option>
						<option value="Bhola">Bhola</option>
						<option value="Bogra">Bogra</option>
						<option value="Brahmanbaria">Brahmanbaria</option>
						<option value="Chandpur">Chandpur</option>
						<option value="Chittagong">Chittagong</option>
						<option value="Chuadanga">Chuadanga</option>
						<option value="Comilla">Comilla</option>
						<option value="Cox'sBazar">Cox'sBazar</option>
						<option value="Dhaka">Dhaka</option>
						<option value="Dinajpur">Dinajpur</option>
						<option value="Faridpur">Faridpur</option>
						<option value="Feni">Feni</option>
						<option value="Gaibandha">Gaibandha</option>
						<option value="Gazipur">Gazipur</option>
						<option value="Gopalganj">Gopalganj</option>
						<option value="Habiganj">Habiganj</option>
						<option value="Jaipurhat">Jaipurhat</option>
						<option value="Jamalpur">Jamalpur</option>
						<option value="Jashore">Jashore</option>
						<option value="Jhalokati">Jhalokati</option>
						<option value="Jhenaidah">Jhenaidah</option>
						<option value="Khagrachari">Khagrachari</option>
						<option value="Khulna">Khulna</option>
						<option value="Kishoreganj">Kishoreganj</option>
						<option value="Kurigram">Kurigram</option>
						<option value="Kushtia">Kushtia</option>
						<option value="Lakshmipur">Lakshmipur</option>
						<option value="Lalmonirhat">Lalmonirhat</option>
						<option value="Madaripur">Madaripur</option>
						<option value="Magura">Magura</option>
						<option value="Manikganj">Manikganj</option>
						<option value="Maulvibazar">Maulvibazar</option>
						<option value="Meherpur">Meherpur</option>
						<option value="Munshiganj">Munshiganj</option>
						<option value="Mymensingh">Mymensingh</option>
						<option value="Naogaon">Naogaon</option>
						<option value="Narail">Narail</option>
						<option value="Narayanganj">Narayanganj</option>
						<option value="Narsingdi">Narsingdi</option>
						<option value="Natore">Natore</option>
						<option value="Nawabganj">Nawabganj</option>
						<option value="Netrokona">Netrokona</option>
						<option value="Nilphamari">Nilphamari</option>
						<option value="Noakhali">Noakhali</option>
						<option value="Pabna">Pabna</option>
						<option value="Panchagarh">Panchagarh</option>
						<option value="Patuakhali">Patuakhali</option>
						<option value="Pirojpur">Pirojpur</option>
						<option value="Rajbari">Rajbari</option>
						<option value="Rajshahi">Rajshahi</option>
						<option value="Rangamati">Rangamati</option>
						<option value="Rangpur">Rangpur</option>
						<option value="Satkhira">Satkhira</option>
						<option value="Shariatpur">Shariatpur</option>
						<option value="Sherpur">Sherpur</option>
						<option value="Sirajganj">Sirajganj</option>
						<option value="Sunamganj">Sunamganj</option>
						<option value="Sylhet">Sylhet</option>
						<option value="Tangail">Tangail</option>
						<option value="Thakurgaon">Thakurgaon</option>
					</select><br>
					<input type="submit" name="submit" class="submit" value="Submit">
				</form>
			</div>
		</div>
	</body>
</html>