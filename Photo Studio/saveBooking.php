<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Photo Studio Booking Details</title>
</head>
	<style>
		* {
			background-color:darkgray;
		}
		.date {
			text-align: center;
			margin-top: 20px;
			font-family: Arial;
			font-size: 26px;
		}
		.booking {
			text-align: center;
			font-family: Arial;
			font-size: 34px;
			margin-top: 50px;
		}
		.details-container {
			text-align: center;
			margin: 0 auto;
			max-width: 350px;
		}
		.details {
			text-align: left;
		}
		/* Add this code to your existing CSS or style section */
		
        .center-button {
			text-align: center;
            margin-top: -10px;
        }

        .custom-button {
			display: inline-block;
            padding: 10px 20px;
            color: #2F2F2F;
            text-decoration: none;
            font-size: 20px;
        }

        .custom-button:hover {
			background-color: white;
            /* Add any additional styles for hover effect */
        }

        .backButton,
        .homeButton {
			display: inline-block;
            background-color: #2F2F2F;
            color: white;
			font-family: Arial;
            border: none;
            width: 80px;
            padding: 10px 20px;
            font-size: 20px;
            text-align: center;
            cursor: pointer;
         }


		.success-message {
			font-size:28px;
			text-align: center;
			animation: checkmark 2s ease both;
			color:#1F3EF9;
			margin-top: 70px;
		}
		
		@keyframes checkmark {
        0% {
            transform: scale(0);
        }
        70% {
            transform: scale(1.0);
        }
        100% {
            transform: scale(1);
        }
    }
	</style>

<body>
	<?php
	
	$date = date("d-m-Y");
	$time = date("H:i");
	
	//get input values from booking form
	extract($_POST);
	
	?>
	
	<div class="date">
	<Date and Time:<b><?php print($date). ' '.$time;?></b></p>
	</div>
    
<section class="booking">
    <h1 style="margin-top: 50px;">Photo Studio Booking Details</h1><br>
    <div class="details-container">
    <table>
		<tr style="margin-right: 500px; text-align: left;font-family: Arial;font-size: 24px;" class="details"><td>NAME</td>
			<td>:</td>
			<td style="margin-left: 20px;"><b><?php print($uName)?></b></td>
		</tr>
		
		<tr style="margin-right: 500px; text-align: left;font-family: Arial;font-size: 24px;" class="details"><td>CONTACT</td>
			<td>:</td>
			<td style="margin-left: 20px;"><b><?php print($uContact)?></b></td>
		</tr>
		
		<tr style="margin-right: 500px; text-align: left;font-family: Arial;font-size: 24px;" class="details"><td>EMAIL</td>
			<td>:</td>
			<td style="margin-left: 20px;"><b><?php print($uEmail)?></b></td>
		</tr>
		
		<tr style="margin-right: 500px; text-align: left;font-family: Arial;font-size: 24px;" class="details"><td>SESSION</td>
			<td>:</td>
			<td style="margin-left: 20px;"><b><?php print($uSession)?></b></td>
		</tr>
		
		<tr style="margin-right: 500px; text-align: left;font-family: Arial;font-size: 24px;" class="details"><td>BACKDROP</td>
			<td>:</td>
			<td style="margin-left: 20px;"><b><?php print($uBackdrop)?></b></td>
		</tr>
		
		<tr style="margin-right: 500px; text-align: left;font-family: Arial;font-size: 24px;" class="details"><td>DATE</td>
			<td>:</td>
			<td style="margin-left: 20px;"><b><?php print($uDate)?></b></td>
		</tr>
		
		<tr style="margin-right: 500px; text-align: left;font-family: Arial;font-size: 24px;" class="details"><td>TIME</td>
			<td>:</td>
			<td style="margin-left: 20px;"><b><?php print($uTime)?></b></td>
		</tr>
		
		<tr style="margin-right: 500px; text-align: left;font-family: Arial;font-size: 24px;" class="details">
			<td><b>TOTAL</b></td>
            <td>:</td>
            <td style="margin-left: 20px;">
				<b>
					<?php
                    // Get the user's input time in minutes (assuming you have a variable $uTime)
	               
                    $price = 0;

                    if (isset($uSession)) 
					{
						switch ($uSession) 
						{
							case "15 MINUTES PHOTOSHOOT":
                                 $price = 30;
                                 break;
                            case "25 MINUTES PHOTOSHOOT":
                                 $price = 50;
                                 break;
                            case "45 MINUTES PHOTOSHOOT":
                                 $price = 80;
                                 break;
                        default:
                            echo "Invalid session input.";
                            break;
                         }
                     } 
				else 
				{
                        echo "Invalid session input.";
                }

                        echo "RM" . $price;
                     ?>
        </b>
    </td>
</tr>

        </table>
		</div>
	</section>

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
	
	//create query
	$sql = "INSERT INTO booking (name, contact, email, session, backdrop, date, time, price) VALUES ('$uName', '$uContact', '$uEmail', '$uSession', '$uBackdrop', '$uDate', '$uTime', '$price')";
	
	//execute query
	if ($conn->query($sql) === TRUE) 
	{
		echo "<p class='success-message'>Your booking has been made successfully!</p>";
    }

	else 
	{
		echo "Error. " .$sql. "<br>" .$conn->error;
	}
	
	//close connection
	$conn->close(); 
?>

<br>
<form>
    <div class="center-button">
        <a href="booking form.html" class="backButton">Back</a>
        <a href="homepage.html" class="homeButton">Home</a>
    </div>
</form>
</body>
</html>