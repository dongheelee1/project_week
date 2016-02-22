<!DOCTYPE html>
<html>
<head>
	<title>Survey Form</title>
	<style>
		*{
			margin: 0px auto;
			padding: 0px;
		}
		h2{
			text-align: center;
		}

		form{
			border:2px solid blue;
			width: 60%;
		}
	</style>
</head>
<body>
<h2>Welcome, <?=$userinfo['first_name']; ?> </h2>

<form method="post" action="/process">
	<div>
		Ingredients:<input type="text" class="ingredients"><br>
		Ingredients:<input type="text" class="ingredients"><br>
		Ingredients:<input type="text" class="ingredients"><br>
		Ingredients:<input type="text" class="ingredients"><br>
		Ingredients:<input type="text" class="ingredients"><br>
	</div>
	<div>
		food type:
		<select name="cuising">
		<option value="French">French</option>
		<option value="American">American</option>
		<option value="Mexican">Mexican</option>
		<option value="Chinese">Chinese</option>
		<option value="Italian">Italian</option>
		<option value="BBQ">BBQ</option>
		<option value="Mediterranean">Mexican</option>
		<option value="other">Other</option>
		</select>
	</div>

	<!-- <div>
		Comment:
		<textarea name="comment" rows="10" cols="15"></textarea>
	</div> -->
	<input type="submit" name="submit">
</form>

	<form action="Logins/logout" method="post">
		<input type="submit" value="logout">
	</form>
</body>
</html>