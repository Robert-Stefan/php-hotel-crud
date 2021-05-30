<?php 
// DATABASE CONNECTION

$host = 'localhost';
$username = 'root';
$password = 'root';
$dn_name = 'hotel';

//open connection 
$conn = new mysqli($host, $username, $password, $dn_name);


//check connection status
if ($conn && $conn->connect_error) {
    die("Connection failed: $conn->connect_error");
}
?>