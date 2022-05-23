<?php

$user = 'root';
$pass = '';
$db = 'lab-4';
$conn = new mysqli('localhost', $user, $pass, $db);

if ($conn -> connect_error) {
    die ('Connection Failed : '.$conn->connect_error);
}
else
{
    $id = $_POST['update_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dept = $_POST['dept'];
    $roll = $_POST['roll'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $fvice1 = $_POST['fvice'];
    $address = $_POST['address'];
    $district = $_POST['district'];

    $s = "";
    foreach($fvice1 as $fv) {
        $s .= $fv."<br>";
    }


    $sql = "UPDATE form SET fname='$fname', lname='$lname', dept='$dept', roll='$roll', gender='$gender',email = '$email', phone='$phone', fvice= '$s', address ='$address', district='$district' WHERE id = '$id' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo '<script>alert("Data Updated Successfully!")</script>';
    $s ="";
    
    
    
    $stmt->close();
    $conn->close();

}

header("Location: table.php");






?>