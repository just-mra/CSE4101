<?php
session_start();
?>
<!DOCTYPE html>
<head>
<title>Web Engineering Lab 4 part1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container1">
    <h2><span>Registration Form</span> </h2>
    <?php
  if($_SESSION['message']){?>
<script>alert("Data has been inserted successfuly!")</script>
<?php } ?>
        <form style="" action="config.php" method="post">
            <fieldset>
            <label for="firstname">First name *</label>
            <input type="text" id="firstname" name="firstname" required><br>
            <label for="lastname">Last name *</label>
            <input type="text" id="lastname" name="lastname" required><br>
            <label for="">Department *</label>
            <select name="dept"><br>
                <option value="CSE" selected>CSE</option>
                <option value="AIS">AIS</option>
                <option value="APPT">APPT</option>
                <option value="EEE">EEE</option>
                <option value="TE">TE</option>
                <option value="BANGLA">BANGLA</option>
                <option value="ENGLISH">ENGLISH</option>

            </select><br>
            <label for="">Roll *</span></label>
            <input type="number" name="roll" required><br>
            <label for="">Gender</label><br>
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female <br><br>

            <label for="">Email *</span></label>
            <input type="email" name="email" id="" required><br>
            <label for="">Mobile Number:</label>
            <input type="number" name="number" id=""><br>
            <label for="">Favourite Icecream flavor</label>
            <select name="flav" id="">
                <option value="Mango">Mango</option>
                <option value="Lichi">Lichi</option>
                <option value="Grape">Grape</option>
                <option value="GreenTea">GreenTea</option>
            </select><br>
            <label for="">Address</label>
                <input type="text" name="address">
            <label for="">Home District *</label>
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
                <option value="Jamalpur" selected>Jamalpur</option>
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
</fieldset>
        </form>

    </div>



</body>

</html>