<?php
    include('database_connect.php');

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dept = $_POST['dept'];
    $roll = $_POST['roll'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['tel'];
    $address = $_POST['address'];
    $district = $_POST['district'];
    $flavour_list = $_POST['flavour'];

    $ice_cream = "";
    //$len = strlen($flavour_list);
    
    foreach ($flavour_list as $x){
        if(strlen($ice_cream)>0){
            $ice_cream = $ice_cream.' ' .$x;
        }else{
            $ice_cream = $ice_cream.$x;
        }
        
    }
    

    $sql = "INSERT INTO Person_Information (fname, lname, dept, roll, gender, email, phone, flavour, address, district)
        VALUES ('$fname', '$lname', '$dept', '$roll', '$gender', '$email', '$phone', '$ice_cream','$address', '$district')";
    

    if ($conn->query($sql) === TRUE) {
        header('location: index.php');
        echo "New record created successfully<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
    