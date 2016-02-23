<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login and Registration</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
	integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
	integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	
	<style type="text/css">
		.error{
			color:red;
		}
		.success{
			color:green;
			
		}

	</style>
</head>
<body>
	<div id="nav_bar">
		
	</div>
	<?php echo $errors; ?>
	<h2>What's in your Fridge?</h2>
	<h4>Register</h4>
	<form action='/Logins/register' method= 'post'>
		<input type='hidden' name='action' value='register'><br>
		First Name:<input type="text" name="first_name"> <br>
		Last Name:<input type="text" name="last_name"> <br>
		Email Address:<input type="text" name="email"> <br>
		Password:<input type="password" name="password"> <br>
		Confirm Password:<input type="password" name="confirm_password"> <br>
		<input type='submit' value='register'>
	</form>
	<h4>Login</h4>
	<form action='/Logins/userLogin' method= 'post'>
		<input type='hidden' name='action' value='login'>
		Email:<input type="text" name="email"> <br>
		Password:<input type="password" name="password"> <br>
		<input type='submit' value='Log in'>
	</form>
</body>
</html>