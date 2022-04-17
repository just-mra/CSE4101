
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lab-4</title>
</head>
<body>
    <form action="action_page.php" id="form" method="POST">
        <div style="display: flex;justify-content:center; margin-top: 60px;">
            <div style="display: inline-block;width:50%">
                <div>
                    <label style="margin-right:13px;" for="fname">First Name:</label>
                    <input type="text" id="fname" name="fname" required><br><br>
                    <label style="margin-right:15px;" for="lname">Last Name:</label>
                    <input type="text" id="lname" name="lname" required><br><br>
                </div>
                <div>
                    <label style="margin-right:25px;" for="gender">Gender:</label>
                    <input style="width: 20px" type="radio" id="male" name="gender" value="Male" required>
                    <label for="male">Male</label>
                    <input style="width: 20px" type="radio" id="fmale" name="gender" value="Female" required>
                    <label for="fmale">Female</label>
                    <input style="width: 20px" type="radio" id="others" name="gender" value="Others" required>
                    <label for="others">Others</label><br><br>
                </div>
                <div>
                    <label style="margin-right:30px;" for="address"> Address: </label>
                    <input type="text" name="address" id="address" required><br><br>
                </div>
                <div>
                    <label style="margin-right:35px;"  for="district">District: </label>
                    <select name="district" style="width: 220px; height:30px; border-radius: 5px;" required>
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
                </div>
            </div>
            <div style="display: inline-block; width:50%">
                <div>
                    <div style="display: inline-block;">
                        <label style="margin-right:22px" for="dept">Department:</label>
                        <select name="dept" style="width: 220px;height: 30px; border-radius:5px" required>
                            <option value="CSE">CSE</option>
                            <option value="EEE">EEE</option>
                            <option value="IPE">IPE</option>
                            <option value="PME">PME</option>
                            <option value="ChE">ChE</option>
                            <option value="BME">BME</option>
                            <option value="Civil">Civil</option>
                            <option value="ICE">ICE</option>
                        </select><br><br>
                    </div>
                    <div style="display: inline-block">
                        <label style="margin-right:72px;" for="roll">Roll:</label>
                        <input style="width: 220px;height: 30px" type="text" id="roll" name="roll" required><br><br>
                    </div>
                    
                </div>
                <div>
                    <div style="display: inline-block">
                        <label for="tel">Phone Number:</label>
                        <input style="width: 220px;height: 30px" type="tel" id="tel" name="tel" required><br><br>
                    </div>
                    <div style="display: inline-block">
                        <label for="email">Email Address:</label>
                        <input style="width: 220px;height: 30px" type="email" id="email" name="email" required><br><br>
                    </div>

                </div>
                
                
                <div>
                    <label for="dept">Ice Cream Flavor:</label><br><br>
                    <div style="padding: 0px 50px">
                        <div style="display: inline-block">
                            <input style="width: 10px" type="checkbox" id="chokobar" name="flavour[]" value="Chokobar">
                            <label for="chokobar">Chokobar</label><br><br>
                            <input style="width: 10px" type="checkbox" id="choklate" name="flavour[]" value="Choklate">
                            <label for="choklate">Choklate:</label><br><br>
                            <input style="width: 10px" type="checkbox" id="banana" name="flavour[]" value="Banana">
                            <label for="bananar">Banana</label><br><br>
                        </div>
                        <div style="display: inline-block">
                        
                            <input style="width: 10px" type="checkbox" id="neopolitan" name="flavour[]" value="Neopolitan">
                            <label for="neopolitan">Neopolitan</label><br><br>
                            <input style="width: 10px" type="checkbox" id="raspberry" name="flavour[]" value="Raspberry">
                            <label for="raspberry">Raspberry</label><br><br>
                            <input style="width: 10px" type="checkbox" id="vanila" name="flavour[]" value="Vanila">
                            <label for="vanila">Vanila</label><br><br>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>        
         <br><br>
        <div style="text-align:center; padding-bottom: 10px;">
            <button> Submit</button>
        </div>
        
      </form>
    
</body>
</html>
