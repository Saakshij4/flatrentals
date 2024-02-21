<?php

// Database connection
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "flatdatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
if(isset($email)||isset($email)||isset($password)){
$email = $_POST['email'];
$username=$_POST['username'];
$password = $_POST['password'];



// Prepare SQL statement
$sql = "INSERT INTO signup (email,username,password)
        VALUES ('$email','$username', '$password')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "User sign uped successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}


$conn->close();

?>
