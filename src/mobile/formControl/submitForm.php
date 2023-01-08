<?php

include "../../servers.php";

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

$conn = new mysqli($server, $username, $password, $dbname);

$sql = "INSERT INTO messages (Name, Email, Phone, Msg) VALUES ('$name', '$email', '$phone', '$message')";

if ($conn->query($sql) === true) {
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: ../index.php");

?>
