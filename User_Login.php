<html>
	<h1> User Login </H1>
	<body>
	<a href= 'http://localhost/HW2_New/user-list.php'>User List</a><br>
	<a href= 'http://localhost/HW2_New/user-details.php'>User Details</a><br>
	<a href= 'http://localhost/HW2_New/user-add.php'>User Add</a><br>

		<p> Username:
		<form method='post' action='User_Login.php'>
			<input type='text' name='UserName'><br>
			Password: <br><br>
			<input type='text' name='Password'>
			<input type='submit'>
		</form>	
	</body>
</html>

<?php
	$UserName="";
	$Password="";
	if(isset($_POST['UserName']))
	{
		$UserName = $_POST['UserName'];
		$Password = $_POST['Password'];
	}
	else
	{
		$UserName = "Not entered";
		$Password = "Not entered";
	}	
	
	echo "Your Username is $UserName";
	echo '<br>';
	echo "Your Password is $Password";
	
	
	
	
	
	
	
	
	
	
	
	
	
?>


