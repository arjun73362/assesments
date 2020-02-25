<?php
error_reporting(1);
$servername = "localhost";
$username = "root";
$password = "Root@123";
try {
    $conn = new PDO("mysql:host=$servername;dbname=hello", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>