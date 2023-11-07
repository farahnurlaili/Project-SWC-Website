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
		echo "<p>Wrong username or password. Please try again.</p>";
	}
	
	$conn->close();
?>