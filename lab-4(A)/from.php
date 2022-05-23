<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "web";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>

<form action="" method='post'>
    <label for="Firstname">First name:</label><br>
    <input type="text" id="Firstname" name="Firstname" placeholder="Enter First Name" ><br><br>
    <label for="Lastname">Last name:</label><br>
    <input type="text" id="Lastname" name="Lastname" placeholder="Enter Last Name"><br><br>

    <label for="Department">Department:</label><br>
    <select name="Department" id="Department">
        <option value="CSE">CSE</option>
        <option value="PME">PME</option>
        <option value="BME">BME</option>
        <option value="EEE">EEE</option>
        <option value="GEBT">GEBT</option>
    </select><br><br>
    <label for="Roll">Roll:</label><br>
    <input type="number" id="Roll" name="Roll" placeholder="Roll"><br><br>

    <label for="Gender">Gender:</label><br>
    <select name="Gender" id="Gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </select><br><br>
    <label for="Email">Email:</label><br>
    <input type="text" id="Email" name="Email" placeholder="Enter Email"><br><br>

    <label for="MobileNumber">Mobile Number:</label><br>
    <input type="number" id="MobileNumber" name="MobileNumber" placeholder="Enter Mobile Number" ><br><br>
    <label for="FavoriteIcecreamflavor">Favorite Icecream flavor:</label><br>
    <select name="FavoriteIcecreamflavor" id="FavoriteIcecreamflavor">
        <option value="Vanila">Vanila</option>
        <option value="Chocolate">Chocolate</option>
        <option value="MixedFruit">Mixed Fruit</option>
        <option value="Mangoo">Mangoo</option>
    </select><br><br>    <label for="Address">Address:</label><br>
    <input type="Address" id="Address" name="Address" placeholder="Enter Address" ><br><br>
    <label for="Homedistrict">Home district:</label><br>
    <select name="Homedistrict">
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
        <option value="Jessore">Jessore</option>
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
    <br><br>
    <button type="submit" name="submit">Submit</button>
</form>

<?php
if(isset($_POST["submit"])){

$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Department = $_POST['Department'];
$Roll = $_POST['Roll'];
$Gender = $_POST['Gender'];
$Email = $_POST['Email'];
$MobileNumber = $_POST['MobileNumber'];
$FavoriteIcecreamflavor = $_POST['FavoriteIcecreamflavor'];
$Address = $_POST['Address'];
$Homedistrict = $_POST['Homedistrict'];



$sql = "INSERT INTO web (Firstname , Lastname ,Department ,Roll, Gender ,Email , MobileNumber , FavoriteIcecreamflavor , Address , Homedistrict 
) VALUES ('$Firstname' , '$Lastname' ,'$Department' ,'$Roll', '$Gender' , '$Email' , '$MobileNumber' , '$FavoriteIcecreamflavor' , '$Address' , '$Homedistrict')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);

}
?>



    
</body>
</html>