<?php

    if (isset($_POST['submit'])) {
        
        $firstname = $_POST['firstName'];
        $lastname = $_POST['lastName'];
        $department = $_POST['department'];
        $roll = $_POST['roll'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $icecream = $_POST['icecream'];
        $address = $_POST['address'];
        $district = $_POST['district'];


        $sql = "INSERT INTO info (firstname, lastname, department, roll, gender, email, mnumber, icecream, address, district) VALUE ('$firstName' , '$lastName' ,'$department', '$roll','$gender', '$email' ,'$number','$icecream' ,'$address', '$HomeDistrict')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>