<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login and Registration</title>
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