<?php
$mysqli = new mysqli('db', 'myuser', 'mypassword', 'mydatabase');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$result = $mysqli->query("SELECT mycolumn FROM mytable");
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row['mycolumn'] . '<br>';
    }
} else {
    echo "0 results";
}

$mysqli->close();