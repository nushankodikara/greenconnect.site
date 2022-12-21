<?php

$server = "localhost";
$username = "";
$password = "";
$dbname = "";

$email = $_POST['email'];
$userpassword = $_POST['password'];

// Create connection

$conn = new mysqli($server, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$userpassword'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // create a cookie for the user
    setcookie("user", $email, time() + (86400 * 30), "/");
    header("Location: ../index.html");
} else {
    echo "Wrong username or password";
}

$conn->close();
?>