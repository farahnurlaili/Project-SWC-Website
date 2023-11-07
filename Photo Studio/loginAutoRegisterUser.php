<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "photo_studio";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user registration data from the HTML form
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Insert user data into the database
$sql = "INSERT INTO user_register (firstName, lastName, contact, email, username, password) 
        VALUES ('$firstName', '$lastName', '$contact', '$email', '$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>