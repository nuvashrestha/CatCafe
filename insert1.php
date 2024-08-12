<?php
$userid = $_POST['userid'];
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$time = $_POST['time'];
$date = $_POST['date'];
$number = $_POST['number'];

// Connection parameters
$servername = 'localhost';
$username = 'root';
$password = 'nuva';
$dbname = 'cat_cafe';
$port = 3306;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}

// Prepare and bind statement
$stmt = $conn->prepare("INSERT INTO reservation (f_name, l_name, email, time, date, number, userid) VALUES (?, ?, ?, ?, ?, ?, ?)");
if ($stmt === false) {
    die('Prepare Failed: ' . $conn->error);
}

$stmt->bind_param('sssssis', $f_name, $l_name, $email, $time, $date, $number, $userid);
$stmt->execute();

if ($stmt->error) {
    die('Execute Failed: ' . $stmt->error);
} else {
    echo 'Your reservation has successfully been placed!';
}

$stmt->close();
$conn->close();