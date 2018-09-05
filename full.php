<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname="myDB1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

echo "Connected successfully";
$sql = "SELECT SELECT * FROM name";
$result = $conn->query($sql);

if ($result > 0) {
	echo $result;
}
$conn->close();
?>
