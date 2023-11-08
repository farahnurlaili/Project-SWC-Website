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

// Escape special characters in a string
$uName = mysqli_real_escape_string($conn, $_POST['customer_name']);
// Create and execute the query
$sql = "SELECT * FROM booking WHERE name= '$uName'";
$result = $conn->query($sql);

// Check if records were returned
if ($result->num_rows > 0) {
    echo '<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>View Booking</title>
        <style>
            * {
                background-color: darkgrey;
            }
            .title {
                text-align: center;
                font-size: 30px;
                margin-top: 50px;
            }
            .container {
                text-align: center;
                margin-top: 20px;
            }
            .custom-button {
                background-color: #2F2F2F;
                color: white;
                border: none;
                padding: 10px 20px;
                font-size: 18px;
				font-family: Arial;
                cursor: pointer;
                text-decoration: none; /* Remove underline for anchor tags */
                margin-top: 1px;
				space
            }
        </style>
    </head>
    <body>
        <div class="title">
            <h1>Customer Booking Details</h1>
        </div>
        <div class="container">
            <table cellpadding=10 cellspacing=0 border=1 align="center">
                <tr>
                    <td align="center"><b>No</b></td>
                    <td align="center"><b>Customer Name</b></td>
                    <td align="center"><b>Customer Contact</b></td>
                    <td align="center"><b>Customer Email</b></td>
                    <td align="center"><b>Session</b></td>
                    <td align="center"><b>Backdrop</b></td>
                    <td align="center"><b>Date</b></td>
                    <td align="center"><b>Price (RM)</b></td>
					<td></td>
                </tr>';

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td align="center">' . $row["id"] . '</td>';
        echo '<td align="center">' . $row["name"] . '</td>';
        echo '<td align="center">' . $row["contact"] . '</td>';
        echo '<td align="center">' . $row["email"] . '</td>';
        echo '<td align="center">' . $row["session"] . '</td>';
        echo '<td align="center">' . $row["backdrop"] . '</td>';
        echo '<td align="center">' . $row["date"] . '</td>';
        echo '<td align="center">' . $row["price"] . '</td>';
		echo '<td align="center"><a href="updateRecord.php?id='.$row["id"].'&session='.$row["session"].'">UPDATE</a></td>';
        echo '</tr>';
    }

    echo '<tr>';
    echo '<td colspan="15" align="center">';
    echo '<div class="center-button">';
    echo '<a href="AdminMenu.php">';
    echo '<input type="button" value="Back to Main Menu" class="custom-button">';
    echo '</a>';
    echo '</div>';
    echo '</td>';
    echo '</tr>';
	
} else {
    echo '<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>No Record Found</title>
        <style>
            * {
                background-color: darkgrey;
            }
            .message {
                text-align: center;
                font-size: 26px;
                margin-top:300px;
                color: red;
            }
            .custom-button {
                background-color: #2F2F2F;
                color: white;
                border: none;
                padding: 10px 20px;
                font-size: 20px;
                cursor: pointer;
                text-decoration: none;
                margin-top: 70px;
				font-family: Arial;
            }
        </style>
    </head>
    <body>
        <div class="message">
            <p>No record found</p>
            <a href="AdminMenu.php" class="custom-button">Back to Main Menu</a>
			<a href="searchList.php" class="custom-button">Back to Search</a>
        </div>
    </body>
    </html>';
}

// Close the connection
$conn->close();
?>
