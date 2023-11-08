<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update Booking Session</title>
    <style>
        * {
            background-color: darkgrey;
        }
        .form-container {
            text-align: center;
            margin-top: 50px;
        }
        input[type="text"] {
            width: 250px;
            padding: 10px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #2F2F2F;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
        }
        .message {
            text-align: center;
            font-size: 20px;
            margin-top: 20px;
        }
		select[name="new_session"] 
		{
			width: 20%;
		    height: 20%;
		    text-align: center;
		    font-size: 20px;
	    }
		.btn-secondary {
            background-color: #2F2F2F;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            text-decoration: none; /* Remove underline for anchor tags */
         }
         .btn-secondary {
            margin-top: 30px;
		    font-family: Arial;
			margin-right:400px;
		}
		.btn-primary {
			align:center;
			margin-left:580px;
			margin-top: 30px;
		}
    </style>
</head>
<body>
    <div class="form-container">
        <h1 style="margin-top: 250px;font-size: 50px;">Update Booking Session</h1>
        <form action="processUpdate.php" method="post">
            <input type="hidden" name="booking_id" value="<?php echo $_GET['id']; ?>">
            <p style="font-size: 22px;">CURRENT SESSION: <?php echo $_GET['session']; ?></p>
            <select class="form-control" name="new_session" id="InputSession">
            <option value="" disabled selected>---Please Select to Update---</option>
            <option value="15 MINUTES PHOTOSHOOT">15 MINUTES PHOTOSHOOT</option>
            <option value="25 MINUTES PHOTOSHOOT">25 MINUTES PHOTOSHOOT</option>
            <option value="45 MINUTES PHOTOSHOOT">45 MINUTES PHOTOSHOOT</option>
        </select>
    </div>
    <input type="hidden" name="booking_id" value="<?php echo $_GET['id']; ?>">
    <input type="submit" name="submit" value="Update Session" class="btn-primary">
       </form>
<a href="AdminMenu.php" class="btn-secondary">Back to Main Menu</a>
    </div>
</body>
</html>



