<?php 
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->bind_param("s", $_POST["username"]);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    if ($data["password"] == $_POST["password"]) {
    header ("Location: UserPage.php");
    }
    $stmt->close();
    

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
</head>
<body>
    <div class="main-cont">
        <div class="login-cont">
            <h1>START TRACKING</h1>
            <form action="LandingPage.php" method="POST">
                <label for="">Username:</label>
                <input type="text" name="username"> <br>
                <label for="">Password</label>
                <input type="password" name="password"> <br>
                <button type="submit" name="submit" value="submit">LOGIN</button> <br>
                <a href="RegisterPage.php">Register</a>
            </form>
        </div>
    </div>
</body>
</html>