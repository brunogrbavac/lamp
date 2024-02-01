<?php
$mysqli = new mysqli('127.0.0.1', 'admin', 'password', 'database');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$result = $mysqli->query('SELECT * FROM myTable LIMIT 1');
if ($result === false) {
    die('Error executing query: ' . $mysqli->error);
}

$row = $result->fetch_assoc();
$content = $row['content'];

$mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div><?php echo $content; ?></div>
</body>
</html>
