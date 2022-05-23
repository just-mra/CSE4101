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
    $id = $_POST['delete_id'];
 

    $sql = "DELETE FROM form  WHERE id = '$id' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo '<script>alert("Data Deleted Successfully!")</script>';

    
    
    
    $stmt->close();
    $conn->close();
//     if(isset($_POST['deletedata']))
// {
//     $id = $_POST['delete_id'];

//     $query = "DELETE FROM form WHERE id='$id'";
//     $query_run = mysqli_query($connection, $query);

//     if($query_run)
//     {
//         echo '<script> alert("Data Deleted"); </script>';
//         header("Location:index.php");
//     }
//     else
//     {
//         echo '<script> alert("Data Not Deleted"); </script>';
//     }
// }

}

header("Location: table.php");






?>