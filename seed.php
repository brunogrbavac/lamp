<?php
$mysqli = new mysqli('db', 'admin', 'password', 'database');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// Create table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS mytable (
    id INT AUTO_INCREMENT PRIMARY KEY,
    mycolumn VARCHAR(255) NOT NULL
)";
if (!$mysqli->query($sql)) {
    die('Error: ' . $sql . '<br>' . $mysqli->error);
}

// Insert data
$sql = "INSERT INTO mytable (mycolumn) VALUES ('Hello, world!')";
if (!$mysqli->query($sql)) {
    die('Error: ' . $sql . '<br>' . $mysqli->error);
}

$mysqli->close();