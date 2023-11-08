<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Photo Studio Booking Details</title>
</head>
	<style>
	* {
        background-color: darkgrey;
    }
    .error-message {
        text-align: center;
        font-size: 30px;
        margin-top: 300px;
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

	$servername="localhost";
    $username="root";
    $password="";
    $dbName="photo_studio";

    //create connection
    $conn=new mysqli($servername, $username, $password, $dbName);

    //check connection
    if($conn->connect_error) 
	{
		die("Connection failed." .$conn->connect_error);
	}

    //define $myusername and $mypassword
    $myusername=$_POST['myusername'];
    $myid=$_POST['myid'];
    $mypassword=$_POST['mypassword'];

    $sql = "SELECT username, noid, password FROM admin WHERE username='$myusername' and noid='$myid' and password='$mypassword' ";
    $result=$conn->query($sql);

    //mysql_num_row is counting table row
    if ($result->num_rows>0)
	{
		//redirect to file "adminMenu.php"
		header("location:adminMenu.php");
	}
    else{
		echo '<div class="error-message">Wrong username or password. Please try again ' . $conn->error . '</div>';
	}
	
	$conn->close();
?>
	
	<div class="center-button">
    <a href="admin login page.html">
        <input type="button" value="Try Again" class="custom-button">
    </a>
</div>
</body>
</html>