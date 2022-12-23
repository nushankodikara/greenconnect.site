<?php

include '../servers.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$userpassword = $_POST['password'];

// Create connection

$conn = new mysqli($server, $username, $password, $dbname);

$sql = "INSERT INTO users (First_Name, Last_Name, Email, Passwd) VALUES ('$firstname', '$lastname', '$email', '$userpassword')";

if ($conn-> query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: ../index.php");

?>