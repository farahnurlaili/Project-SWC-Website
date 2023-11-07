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
 
 //escape special characters in a string
 $uName = mysqli_real_escape_string($conn, $_POST['customer_name']);
 //create and execute query
 $sql = "SELECT * FROM booking WHERE name= '$uName'";
 $result = $conn->query($sql);
 //check if records were returned
 if ($result->num_rows > 0) {
 //create a table to display the record
 echo 'Selected record as the following: <br><br>';
 echo '<p><table cellpadding=10 cellspacing=0 border=1 align="center">';
 echo '<tr><td align="center"><b>No</b></td>
 <td align="center"><b>Customer Name</b></td>
 <td align="center"><b>Customer Contact</b></td>
 <td align="center"><b>Customer Email</b></td>
 <td align="center"><b>Session</b></td>
 <td align="center"><b>Backdrop</b></td>
 <td align="center"><b>Date</b></td>
 <td align="center"><b>Time</b></td>
 <td align="center"><b>Price</b></td>
 <td align="center">&nbsp&nbsp</td>
 </tr>';
 
 // output data of each row
 while($row = $result->fetch_assoc()) {
 echo '<tr>';
 echo '<td align="center">'.$row["id"].'</td>';
 echo '<td align="center">'.$row["name"].'</td>';
 echo '<td align="center">'.$row["contact"].'</td>';
 echo '<td align="center">'.$row["email"].'</td>';
 echo '<td align="center">'.$row["session"].'</td>';
 echo '<td align="center">'.$row["backdrop"].'</td>';
 echo '<td align="center">'.$row["date"].'</td>';
 echo '<td align="center">'.$row["time"].'</td>';
 echo '<td align="center">'.$row["price"].'</td>';
 echo '</tr>';
 }
 echo '</table></p>';
 } 
 else {
 echo '<font color=red>No record found';
 }
 //close connection 
 $conn->close();
?>