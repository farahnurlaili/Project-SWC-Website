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
    $myemail=$_POST['myemail'];
    $mypassword=$_POST['mypassword'];
    
    $sql = "INSERT INTO users (username, email, password) VALUES ('$myusername', '$myemail', '$mypassword') ";

    //mysql_num_row is counting table row
    if ($conn->query($sql) === TRUE)
	{
		//redirect to file "adminMenu.php"
		header("location:UserMenu.php");
	}
    else{
		echo "<p>Wrong username or password. Please try again.</p>";
	}
	
	$conn->close();
?>