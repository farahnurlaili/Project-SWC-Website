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
        font-size: 30px;
        margin-top: 300px;
        color: red;
    }
    .center-button {
        text-align: center;
        margin-top: 30px;
    }
    .custom-button {
        background-color: #2F2F2F;
        color: white;
        border: none;
        width: 150px;
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
$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $booking_id = $_POST['booking_id'];
    $new_session = $_POST['new_session'];

    // Update the session in the database
    $sql = "UPDATE booking SET session = '$new_session' WHERE id = $booking_id";

    if ($conn->query($sql) === TRUE) {
        echo '<div class="message">Session updated successfully!</div>';
    } else {
        echo '<div class="message">Error updating session: ' . $conn->error . '</div>';
    }
}
?>

<div class="center-button">
    <a href=viewBooking.php>
        <input type="button" value="View Booking" class="custom-button">
    </a>
</div>
	</body>
</html>

</body>
</html>
