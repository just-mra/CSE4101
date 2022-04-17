<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <h1>Storing Form data in Database</h1>
		<form action="insert.php" method="post">
			<p>
				<label for="firstName">First Name:</label>
				<input type="text" name="first_name" id="firstName">
			</p>
            <p>
				<label for="lastName">Last Name:</label>
				<input type="text" name="last_name" id="lastName">
			</p>
            <p>
				<label for="Department">Department:</label>
				<select name="department" id="Department" required>
                    <option value="CSE">CSE</option>
                    <option value="EEE">EEE</option>
                    <option value="IPE">IPE</option>
                    <option value="PME">PME</option>
                    <option value="ChE">ChE</option>
                    <option value="BME">BME</option>
                </select>

			</p>
            <p>
				<label for="Roll">Roll:</label>
				<input type="text" name="roll" id="Roll">
			</p>
            <p>
				<label for="Gender">Gender:</label>
				<select name="gender" id="Gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
			</p>
            <p>
				<label for="email">Email:</label>
				<input type="email" name="email" id="emailAddress">
			</p>
            <p>
				<label for="Mobilenumber">Mobile Number:</label>
				<input type="text" name="mobilenumber" id="mobile_number">
			</p>
			<p>
				<label for="FavoriteIcecreamFlavor">Favorite Icecream Flavor:</label>
				<select name="favoriteicecreamflavor" id="Favorite_Icecream_Flavor" required>
                    <option value="Vanilla">Vanilla</option>
                    <option value="Chocolate">Chocolate</option>
                    <option value="Banana">Banana</option>
                    <option value="Strawberry">Strawberry</option>
                    <option value="Mango">Mango</option>
                    <option value="Orange">Orange</option>
                </select>
			</p>
            <p>
				<label for="Address">Address:</label>
				<input type="text" name="address" id="Address">
			</p>
            <p>
				<label for="HomeDistrict">Home District:</label>
				<select name="homedistrict" id="Home_District" required>
                    <option value="Jashore">Jashore</option>
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
                </select>
			</p>
			<input type="submit" value="Submit">
		</form>
</body>
</html>
