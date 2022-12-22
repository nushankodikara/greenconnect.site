<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "greenconnect";

$messageID = $_GET['id'];

// Create connection

$conn = new mysqli($server, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

$sql = "UPDATE messages SET completed = 1 WHERE ID = '$messageID'";

if ($conn-> query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: ../admin/index.php");

?>