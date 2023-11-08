<!DOCTYPE html>
<html>
<head>
    <title>Delete Booking Photo Studio</title>
</head>
<style>
    * {
        background-color: darkgrey;
    }
    .message {
        text-align: center;
        font-size: 30px;
        margin-top: 300px;
    }
    .error-message {
        text-align: center;
        font-size: 20px;
        margin-top: 300px;
        color: red;
    }
    .center-button {
        text-align: center;
        margin-top: 30px;
    }
    .custom-button1 {
        background-color: #2F2F2F;
        color: white;
        border: none;
        width: 230px;
        padding: 10px 20px;
        font-size: 18px;
        text-align: center;
        cursor: pointer;
    }
	.custom-button2 {
        background-color: #2F2F2F;
        color: white;
        border: none;
        width: 180px;
        padding: 10px 20px;
        font-size: 18px;
        text-align: center;
        cursor: pointer;
    }
</style>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "photo_studio";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// get input value
$uName = $_POST['customer_name'];
// sql to delete a record
$sql = "DELETE FROM booking WHERE name='$uName'";
if ($conn->query($sql) === TRUE) {
    echo '<div class="message">Record deleted successfully!</div>';
} else {
    echo '<div class="error-message">Error deleting record: ' . $conn->error . '</div>';
}

// close connection
$conn->close();
?>
	
	<div class="center-button">
    <a href="AdminMenu.php">
        <input type="button" value="Back to Main Menu" class="custom-button1">
    </a>
		<a href="viewBooking.php">
        <input type="button" value="View Booking" class="custom-button2">
    </a>
</div>
	</body>
</html>

