<?php

$server = "localhost";
$username = "user";
$password = "password";
$dbname = "greenconnect";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
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

$sql = "INSERT INTO users (First_Name, Last_Name, Email, Passwd) VALUES ('$firstname', '$lastname', '$email', '$userpassword')";

if ($conn-> query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: ../index.html");

?>