<!DOCTYPE html>
<html>
<head>
	<title>Survey Form</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/style.css">
	<script>
		$(document).ready(function(){
			$('#ingredients').submit(function(){

				$.post($(this).attr("action"),
					$(this).serialize(),
					function(data){
						console.log(data);
					},'json');
			//return false;
			});
		});

	</script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
	integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
	integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
</head>
<body>
<div class="jumbotron">
	<div class="container-fluid bg-1 text-center">
		<h2>Welcome, <?=$userinfo['first_name']; ?> </h2>
		<p>Please enter an ingredient that is in your refrigerator.</p>
	
			<form method="post" action="/process" id="ingredients">
				<div class="form-group">
					<label for="ingredient_label">Ingredient 1: </label>
					<input type="text" class="ingredients" name="ingredient_0" required><br>
				</div>
				<div class="form-group">
					<label for="ingredient_label">Ingredient 2: </label>
					<input type="text" class="ingredients" name="ingredient_1" ><br>
				</div>
				<div class="form-group">
					<label for="ingredient_label">Ingredient 3: </label>
					<input type="text" class="ingredients" name="ingredient_2" ><br>
				</div>
				<div class="form-group">
					<label for="ingredient_label">Ingredient 4: </label>
					<input type="text" class="ingredients" name="ingredient_3" ><br>
				</div>
				<div class="form-group">
					<label for="ingredient_label">Ingredient 5: </label>
					<input type="text" class="ingredients" name="ingredient_4" ><br>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" class="btn btn-primary">
				</div>
			</form>
	

		<form action="Logins/logout" method="post">
			<input type="submit" value="Logout" class="btn btn-primary">
		</form>
	</div>
</div>
</body>
</html>