<?php

include '../servers.php';

$email = $_POST['email'];
$userpassword = $_POST['password'];

$conn = new mysqli($server, $username, $password, $dbname);

$sql = "SELECT * FROM users WHERE email = '$email' AND passwd = '$userpassword'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    setcookie("user", $email, time() + (86400 * 30), "/");
    header("Location: ../index.php");
} else {
    echo "Wrong username or password";
}

$conn->close();
?>