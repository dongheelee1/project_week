<!doctype html>
<html lang="en">
<head>
	<title>Login and Registration</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
	integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
	integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="/assets/some_stuff.css">

</head>
<body>

		<?php echo $errors; ?>
<div class="jumbotron">
	<div class="container-fluid bg-1 text-center" id='registration' >
	<div class="page-header">
		<h2 class="text-center"><strong>What's in your Fridge?</strong> <br><small style="color:red">
		<b>For the cook who is just out of ideas</b></small><b></h2>
		</div>
		<h3><b>Register</b></h3>
		<form action='/Logins/register' method= 'post' class="form-inline">
			<input type='hidden' name='action' value='register' ><br>
			<input type="text" name="first_name" placeholder="First Name"> <br>
			<input type="text" name="last_name" placeholder="Last Name"> <br>
			<input type="text" name="email" placeholder="Email"> <br>
			<input type="password" name="password" placeholder="Password"> <br>
			<input type="password" name="confirm_password" placeholder="Confirm Password"> <br>
			<input type='submit' value='Register' class='btn'>
		</form>
		<h3><b>Login</b></h3>
		<form action='/Logins/userLogin' method= 'post' class="form-horizontal">
			<input type='hidden' name='action' value='login'>
			<input type="text" name="email" placeholder="Email"> <br>
			<input type="password" name="password" placeholder="Password"> <br>
			<input type='submit' value='Log in' class='btn'>
		</form>
	</div>
	</div>
</body>
</html>