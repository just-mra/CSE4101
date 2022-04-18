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
        $s .= $fv.", ";
    }


    $stmt = $conn->prepare("insert into form (fname, lname, dept, roll, gender, email, phone, fvice, address, district)
    values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssissssss", $fname, $lname, $dept, $roll, $gender, $email, $phone, $s, $address, $district);
    $stmt->execute();
    echo '<script>alert("Data Uploaded Successfully!")</script>';
    
    
    
    $stmt->close();
    $conn->close();

}






?>