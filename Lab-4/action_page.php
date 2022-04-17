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
    if(strlen($flavour_list)>0){
        foreach ($flavour_list as $x){ 
            $ice_cream = $ice_cream.' ' .$x;
        }
    }
    

    $sql = "INSERT INTO person (fname, lname, dept, roll, gender, email, phone, flavour, address, district)
        VALUES ('$fname', '$lname', '$dept', '$roll', '$gender', '$email', '$phone', '$ice_cream','$address', '$district')";
    

    if ($conn->query($sql) === TRUE) {
        header('location: index.php');
        echo "New record created successfully<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $sql = "SELECT * FROM Person";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>First Name: " . $row["fname"]. "<br>Last Name: " . $row["lname"];
        echo "<br>Department: " . $row["dept"]."<br>Roll: " . $row["roll"];
        echo "<br>Email: " . $row["email"] . "<br>Gender: " . $row["gender"];
        echo "<br>Phone: " . $row["phone"] . "<br>Flavour: " . $row["flavour"];
        echo "<br>Address: " . $row["address"]. "<br>District: " . $row["district"]. "<br>";
        
    }
    } else {
        echo "0 results";
    }

    $conn->close();


?>
    