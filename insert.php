<?php
$userid = $_POST['userid'];
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$time = $_POST['time'];
$date = $_POST['date'];
$number = $_POST['number'];
$package = $_POST['package'];

// Connection parameters for PostgreSQL
$host = 'localhost';
$port = '5432'; // Default port for PostgreSQL
$dbname = 'cat_cafe';
$user = 'postgres'; // Replace with your PostgreSQL username
$password = 'nuva'; // Replace with your PostgreSQL password

try {
    // Connect to PostgreSQL
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
// Prepare and execute statement
$stmt = $pdo->prepare("INSERT INTO reservation (userid, f_name, l_name, email, time, date, number, package) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
if ($stmt === false) {
    die('Prepare Failed: ' . $pdo->errorInfo()[2]);
}

$result = $stmt->execute([$userid, $f_name, $l_name, $email, $time, $date, $number, $package]);

if ($result === false) {
    die('Execute Failed: ' . $stmt->errorInfo()[2]);
} else {
    echo 'Your reservation has successfully been placed!';
}

$stmt->closeCursor(); // Close the cursor to release the connection
$pdo = null; // Close the connection