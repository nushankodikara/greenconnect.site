<?php

include '../servers.php';

$messageID = $_GET['id'];

$conn = new mysqli($server, $username, $password, $dbname);

$sql = "DELETE FROM messages WHERE ID = '$messageID'";

if ($conn-> query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: ../admin/index.php");

?>