<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "greenconnect";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Create connection

$conn = new mysqli($server, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

$sql = "INSERT INTO messages (Name, Email, Phone, Msg) VALUES ('$name', '$email', '$phone', '$message')";

if ($conn-> query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: ../index.html");

?>