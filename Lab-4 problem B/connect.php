<?php
$user = 'root';
$pass = '';
$db = 'lab-4';
$conn = new mysqli('localhost', $user, $pass, $db);
if ($conn -> connect_error) {
    die ('Connection Failed : '.$conn->connect_error);
}
?>
