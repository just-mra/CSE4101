<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Page</title>
</head>
<style>
    td,
    th {
        border: 2px solid black;
    }
    .input-group{
        display: inline;
    }

    /* Popup container */
    .popup {
        position: relative;
        display: inline-block;
        cursor: pointer;
    }

    /* The actual popup (appears on top) */
    .popup .popuptext {
        visibility: hidden;
        width: 1170px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 8px 0;
        position: absolute;
        z-index: 1;
        bottom: 125%;
        right: 10px;
        margin-left: -80px;
    }

    /* Popup arrow */
    .popup .popuptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #555 transparent transparent transparent;
    }

    /* Toggle this class when clicking on the popup container (hide and show the popup) */
    .popup .show {
        visibility: visible;
        -webkit-animation: fadeIn 1s;
        animation: fadeIn 1s
    }
    .popup{
        border: 1px solid black;
    }

    /* Add animation (fade in the popup) */
    @-webkit-keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
</style>

<body>
    <br><br>
    <h1>Students Details</h1><br>
    <?php
    $sql = "SELECT * from lab4";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    ?>
        <table>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Department</th>
                <th>Roll</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Mobile Nunber</th>
                <th>Favourite Ice Cream Flavor</th>
                <th>Address</th>
                <th>Home District</th>
                <th>Actions</th>
            </tr>

            <?php
            while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php
                        echo $row['id'];
                        ?></td>
                    <td><?php
                        echo $row['FirstName'];
                        ?></td>
                    <td><?php
                        echo $row['LastName'];
                        ?></td>
                    <td><?php
                        echo $row['Department'];
                        ?></td>
                    <td><?php
                        echo $row['Roll'];
                        ?></td>
                    <td><?php
                        echo $row['Gender'];
                        ?></td>
                    <td><?php
                        echo $row['Email'];
                        ?></td>
                    <td><?php
                        echo $row['MobileNumber'];
                        ?></td>
                    <td><?php
                        echo $row['FavoriteIcecreamFlavor'];
                        ?></td>
                    <td><?php
                        echo $row['Address'];
                        ?></td>
                    <td><?php
                        echo $row['HomeDistrict'];
                        ?></td>
                    <td>
               
                        <div class="popup" onclick="myFunction()">Edit
                            <span class="popuptext" id="myPopup"><form method="post" action="">
            <div class="input-group">
                <label>First Name</label>
                <input type="text" name="FirstName">
            </div>
            <div class="input-group">
                <label>Last Name</label>
                <input type="text" name="LastName">
            </div>
            <div class="input-group">
                <label>Department</label>
                <select name="Department">
                    <option value="CSE">CSE</option>
                    <option value="EEE">EEE</option>
                    <option value="PME">PME</option>
                    <option value="BME">BME</option>
                    <option value="GEBT">GEBT</option>
                    <option value="PESS">PESS</option>
                </select>
            </div>
            <div class="input-group">
                <label>Roll</label>
                <input type="number" name="Roll">
            </div>
            <div class="input-group">
                <label>Gender</label>
                <select name="Gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="input-group">
                <label>Email</label>
                <input type="text" name="Email">
            </div>

            <div class="input-group">
                <label>Mobile Number</label>
                <input type="number" name="MobileNumber">
            </div>
            <div class="input-group">
                <label>Favorite Icecream Flavor</label>
                <select name="FavoriteIcecreamFlavor">
                    <option value="Strawberry">Strawberry</option>
                    <option value="Mango">Mango</option>
                    <option value="Vanilla">Vanilla</option>
                    <option value="Mixed Fruit">Mixed Fruit</option>
                </select>
            </div>

            <div class="input-group">
                <label>Address</label>
                <input type="text" name="Address">
            </div>
            <div class="input-group">
                <label>Home District</label>
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
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="edit" value="<?php echo $row['id']?>">Edit Details</button>
            </div>

        </form></span>
                        </div>
                        <button name="delete" name="delete"  value="<?php echo $row['id']?>">Delete</button>
                    </td>
                </tr>
            <?php
            }
            ?>

        </table>
    <?php
    } else {
        echo "No Records to display";
    }
    ?>



    <?php
    include('config.php');
    ?>


<script>
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
</body>

</html>