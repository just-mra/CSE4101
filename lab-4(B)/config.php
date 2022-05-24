<?php

if (isset($_POST['edit'])) {

    $edit_id = $_POST['edit'];
           
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


    $sql = "UPDATE web SET FirstName ='$FirstName' , LastName= '$LastName' , Department = '$Department', Roll='$Roll',Gender='$Gender', Email='$Email', MobileNumber='$MobileNumber',FavoriteIcecreamFlavor='$FavoriteIcecreamFlavor', Address='$Address',HomeDistrict='$HomeDistrict' WHERE id = {$edit_id}";


    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}



if (isset($_POST['delete'])) {
    $delete_id = $_POST['delete'];
    $sql = "DELETE * from web WHERE id={$delete_id}";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}

?>