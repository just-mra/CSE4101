<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="page.css">
    <title>Server Page</title>
</head>

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
                    <option value="Dhaka">Dhaka</option>
                    <option value="Jashore">Jashore</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Tangail">Tangail</option>
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