<?php
$host = 'MYSQLHOST';
$user = 'MYSQLUSER';
$password = 'MYSQLPASSWORD';
$database = 'MYSQLDATABASE';
$port = 'MYSQLPORT';

$conn = new mysqli($host, $user, $password, $database, $port);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
