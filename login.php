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
$email = $_POST['email'];
$password = $_POST['password'];



// Prepare SQL statement
$sql = "INSERT INTO login (email,password)
        VALUES ('$email', '$password')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "Flat renter information is succesfully stored";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
