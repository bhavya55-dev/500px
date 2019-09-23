<?php
$servername = "localhost";
$name = "root";
$password = "jazz";
$dbname = "transfer";

// Create connection
$conn = new mysqli($servername, $name, $password, $dbname);
// Check connection

if ($conn) 
{
    die("Connection failed: " . $conn->connect_error);
    echo "error";
}
echo "succes"; 
?>