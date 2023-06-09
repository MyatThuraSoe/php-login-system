<?php
// $dbServer = "localhost";
// $dbUsername = "root";
// $dbPassword = "";
// $dbName = "login_authentication";



// Looing for .env at the root directory
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$dbServer = $_ENV['DBServer'];
$dbUsername = $_ENV['DBUsername'];
$dbPassword = $_ENV['DBPassword'];
$dbName = $_ENV['DBName'];

$conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
