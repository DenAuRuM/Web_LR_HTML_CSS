<?php
$host = 'localhost';
$dbname = 'test';
$username = 'den';
$password = 'tU1(0!,q5';


try {
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
die("Could not connect to the database $dbname :" . $pe->getMessage());
}
?>
