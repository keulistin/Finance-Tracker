<?php
//connect database
$servername = "localhost";
$username = "root";
$password = "";

//create connection
$conn = new mysqli ($servername, $username, $password);

if($conn->connect_error) {
    die("Connectiong Failed: ". $conn->connect_error);
}

echo "Connected Successfully";
?>