<?php
$conn = mysqli_connect('localhost','root','','web4b');
     
        $id = $_POST['update_id'];
        
        
        $fname = $_POST['fname'];

        $lname = $_POST['lname'];
        $departments=$_POST['departments'];
        $roll=$_POST['roll'];
    
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $mnumber=$_POST['mnumber'];
        $flavor=$_POST['flavor'];
        $address=$_POST['address'];
        $district=$_POST['district'];



        $query = "UPDATE registration SET fname='$fname', lname='$lname',departments='$departments',roll='$roll',gender='$gender', email='$email',mnumber='$mnumber',flavor='$flavor', address='$address', district='$district' WHERE id='$id'";
        $q=$conn->prepare($query);
        $q->execute();
        echo '<script> alert("Data Updated"); </script>';
            header("Location:display1.php");

        
        
?>