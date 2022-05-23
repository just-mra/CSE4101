<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Web Lab-4</title>
</head>

<body>
    <div class="container">
    <h2><span>Welcome to Registration Form</span> </h2>
    <!-- <script>alert("Oh,Great!! Data inserted successfuly!")</script> -->
    <?php
if($_SESSION["message"]){?>
<script>alert("Oh,Great!! Data inserted successfuly!")</script>

<?php } ?>

        <form style="" action="store.php" method="post">
            <label for="fname">First name <span style="color: rgb(255, 0, 0);">*</span></label>
            <input type="text" id="fname" name="fname" required><br>
            <label for="lname">Last name <span style="color: rgb(255, 0, 0);">*</span></label>
            <input type="text" id="lname" name="lname" required><br>
            <label for="">Department <span style="color: rgb(255, 0, 0);">*</span></label>
            <select name="departments"><br>
                <option value="CSE">CSE</option>
                <option value="EEE">EEE</option>
                <option value="IPE">IPE</option>
                <option value="PME">PME</option>
                <option value="BME">BME</option>
                <option value="ChE">ChE</option>
                <option value="TE">TE</option>
            </select><br>
            <label for="">Roll <span style="color: rgb(255, 0, 0);">*</span></label>
            <input type="number" name="roll" required><br>
            <label for="">Gender</label><br>
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female <br><br>

            <label for="">Email <span style="color: rgb(255, 0, 0);">*</span></label>
            <input type="email" name="email" id="" required><br>
            <label for="">Mobile Number:</label>
            <input type="number" name="mnumber" id=""><br>
            <label for="">Favorite Icecream flavor</label>
            <select name="flavor" id="">
                <option value="Apple">Apple</option>
                <option value="Bacon">Bacon</option>
                <option value="Banana">Banana</option>
                <option value="Beer">Beer</option>
                <option value="Cake">Cake</option>
                <option value="Cheese">Cheese</option>
                <option value="Cherry">Cherry</option>
                <option value="Chocolate">Chocolate</option>
                <option value="Coffee">Coffee</option>
                <option value="Crab">Crab</option>
                <option value="Grape">Grape</option>
                
            </select><br>
            <label for="">Address</label>
                <input type="text" name="address">
            <label for="">Home District <span style="color: rgb(255, 0, 0);">*</span></label>
            <select name="district">
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
            </select>
            <input type="submit" value="Submit">

        </form>

    </div>



</body>

</html>