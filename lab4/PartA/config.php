<?php

    if (isset($_POST['submit'])) {
        
        $FirstName = $_POST['FirstName'];
        $LastName = $_POST['LastName'];
        $Department = $_POST['Department'];
        $Roll = $_POST['Roll'];
        $Gender = $_POST['Gender'];
        $Email = $_POST['Email'];
        $MobileNumber = $_POST['MobileNumber'];
        $FavoriteIcecreamFlavor = $_POST['FavoriteIcecreamFlavor'];
        $Address = $_POST['Address'];
        $HomeDistrict = $_POST['HomeDistrict'];


        $sql = "INSERT INTO lab4 (FirstName, LastName,Department, Roll,Gender, Email ,MobileNumber,FavoriteIcecreamFlavor, Address ,HomeDistrict) VALUE ('$FirstName' , '$LastName' ,'$Department', $Roll,'$Gender', '$Email' ,$MobileNumber ,'$FavoriteIcecreamFlavor' ,'$Address', '$HomeDistrict')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>