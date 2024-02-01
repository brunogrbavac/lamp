<?php
$mysqli = new mysqli('127.0.0.1', 'admin', 'password', 'database');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $mysqli->query("INSERT INTO myTable (name) VALUES ('$name')");
}

$result = $mysqli->query('SELECT * FROM myTable');
if ($result === false) {
    die('Error executing query: ' . $mysqli->error);
}

while ($row = $result->fetch_assoc()) {
    echo $row['name'] . '<br>';
}

$mysqli->close();
?>

<form method="post">
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>