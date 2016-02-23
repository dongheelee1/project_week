<!DOCTYPE html>
<html>
<head>
	<title>Survey Form</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
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
<form method="post" action="/process" id="ingredients">
	<div>
		Ingredient 1:<input type="text" class="ingredients" name="ingredient_0" required><br>
		Ingredient 2:<input type="text" class="ingredients" name="ingredient_1" ><br>
		Ingredient 3:<input type="text" class="ingredients" name="ingredient_2" ><br>
		Ingredient 4:<input type="text" class="ingredients" name="ingredient_3" ><br>
		Ingredient 5:<input type="text" class="ingredients" name="ingredient_4" ><br>
	</div>
		<input type="submit" name="submit">
</form>
	<!-- <div>
		food type:
		<select name="cuisine">
		<option value="French">French</option>
		<option value="American">American</option>
		<option value="Mexican">Mexican</option>
		<option value="Chinese">Chinese</option>
		<option value="Italian">Italian</option>
		<option value="BBQ">BBQ</option>
		<option value="Mediterranean">Mexican</option>
		<option value="other">Other</option>
		</select>
	</div> -->

	<!-- <div>
		Comment:
		<textarea name="comment" rows="10" cols="15"></textarea>
	</div> -->

	<form action="Logins/logout" method="post">
		<input type="submit" value="logout">
	</form>
</body>
</html>