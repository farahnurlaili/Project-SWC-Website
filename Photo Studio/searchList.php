<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>searchList.php</title>
</head>
<style>
    * {
        background-color: darkgrey;
    }
    .title {
        text-align: center;
        font-size: 30px;
        margin-top: 50px;
    }
    .form-container {
        text-align: center;
        margin-top: 20px;
    }
    input[type="text"] {
        width: 250px;
        padding: 10px;
        font-size: 16px;
    }
    input[type="submit"],
    .custom-button1 {
        background-color: #2F2F2F;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 18px;
        cursor: pointer;
        text-decoration: none; /* Remove underline for anchor tags */
		margin-top: 30px;
		font-family: Arial;
    }
    .custom-button2 {
        background-color: #2F2F2F;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 18px;
        cursor: pointer;
        text-decoration: none; /* Remove underline for anchor tags */
		margin-top: 30px;
		font-family: Arial;
    }
    .button-spacing {
        margin-top: 40px; /* Adjust this value to control the space between buttons */
    }
</style>

<body>
<div class="title">
    <h1>Search Customer Booking Details</h1>
</div>

<div class="form-container">
    <form action="searchBooking.php" method="post">
        <input type="text" name="customer_name" placeholder="Customer Name" size="30">
        <input type="submit" name="submit" value="Search">
    </form>

    <div class="button-spacing"></div> <!-- Add space between the buttons -->

    <a href="AdminMenu.php" class="custom-button1">Back to Main Menu</a>

    <a href="viewBooking.php" class="custom-button2">View Booking</a>
</div>

</body>
</html>
