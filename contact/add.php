<html>
<head>
	<title>Add Users</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>firstname</td>
				<td><input type="text" name="firstname"></td>
			</tr>
			<tr> 
				<td>lastname</td>
				<td><input type="text" name="lastname"></td>
			</tr>
			<tr> 
				<td>subject</td>
				<td><input type="text" name="subject"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$subject = $_POST['subject'];
		
		// include database connection file
		include_once("connect.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO formcontact(firstname,lastname,subject) VALUES('$firstname','$lastname','$subject')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>