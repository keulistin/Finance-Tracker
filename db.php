<?php
//connect database
$servername = "localhost";
$username = "root";
$password = "";
$database = "finance_tracker";

//create connection
$conn = new mysqli ($servername, $username, $password, $database);

if($conn->connect_error) {
    die("Connectiong Failed: ". $conn->connect_error);
}

echo "Connected Successfully";
?>