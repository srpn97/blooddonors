<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname="myDB1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
/*
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
*/


$donor =($_POST['name']);
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$age = mysqli_real_escape_string($conn, $_REQUEST['age']);
$address = mysqli_real_escape_string($conn, $_REQUEST['address']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$mobile = mysqli_real_escape_string($conn, $_REQUEST['mobile']);
$group = mysqli_real_escape_string($conn, $_REQUEST['group']);
$gender = mysqli_real_escape_string($conn, $_REQUEST['gender']);

$sql = "INSERT INTO blooddonors (name,age, address, email, mobile, bloodtype, gender)
VALUES ('$name', '$age', '$address','$email','$mobile','$group','$gender')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

