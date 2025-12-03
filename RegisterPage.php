<?php
require "db.php";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("INSERT INTO user (username, gender, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $gender, $password);
    $stmt->execute();
    $stmt->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div class="main-cont">
        <div class="register-cont">
            <h1>Create Account</h1>
            <form action="RegisterPage.php" method="POST">
                <label for="Username" >Username:</label>
                <input type="text" name="username"> <br>

                <label for="gender">Gender:</label>
                <input type="radio" name="gender" value="female"> female
                <input type="radio" name="gender" value="male"> male 
                <input type="radio" name="gender" value="others"> others <br>

                <label for="password" >Password:</label>
                <input type="Password" name="password"> <br>
                <label for="confirm_password">Confirm Password:</label>
                <input type="Password"> <br>

                <button type="submit" value="submit" name="submit">Register</button> <br>
                <a href="LandingPage.php">Already have an account?</a>
            </form>
        </div>
    </div>
    
</body>
</html>

