<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Main Menu for Admin</title>
</head>
	<style>
		* {
			background-color:darkgray;
		}
		.title {
			text-align: center;
			font-size: 30px;
			margin-top: 50px;
		}
		.button-menu {
			text-align: center;
			margin-top: 50px;
			font-size: 26px;
		}
		.custom-button {
			display: inline-block;
            background-color: #2F2F2F;
            color: white;
            border: none;
            width: 175px;
            padding: 10px 20px;
            font-size: 20px;
            text-align: center;
            cursor: pointer;
		}
	</style>
<body>
	<div class="title"><br>
	<h1 ><b>Main Menu for Admin</b></h1>
	</div>
	
	<div class="button-menu">
	<form action="viewBooking.php" method="post">
		<p><input type="submit" value="View Booking" name="cmdView" class="custom-button"></p>
	</form>
	
	<form action="searchList.php" method="post">
		<p><input type="submit" value="Search Booking" name="cmdSearch" class="custom-button"></p>
	</form>
	
	<form action="deleteList.php" method="post">
		<p><input type="submit" value="Delete Booking" name="cmdDelete" class="custom-button"></p>
	</form>
	
	<form action="AdminLogout.php" method="post">
		<p><input type="submit" value="Log Out" name="cmdLogout" class="custom-button"></p>
	
	<form>
    <p><input type="button" value="Back" class="custom-button" onclick="goBack()"></p>
    </form>
	</div>
	
<script>
function goBack() {
    window.history.back();
}
</script>

</body>
</html>