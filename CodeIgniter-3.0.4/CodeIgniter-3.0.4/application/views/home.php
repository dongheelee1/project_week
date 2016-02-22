<!DOCTYPE html>
<html>
<head>
	<title>Survey Form</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#ingredients').submit(function(){
				// $('.ingredients').each(function(index, element){
				// 	arrIngredients.push($(element).val());
				// });
				$.post($(this).attr("action"),
					$(this).serialize(),
					function(data){
						console.log(data);
					},'json');
				// var joinedIngredients = arrIngredients.join(",");
				// var url = "http://food2fork.com/api/search?key=0f3c05d712303cacf72b6230c8f9e793&q="+ joinedIngredients;
				// console.log(url);
 			// 	url = url.replace(/\s/g,"%20");
 			// 	console.log(url);
				// $.get(url, function(data){
				// 	console.log(data);
				// });
		
			// 	var values = {};
			// $inputs.each(function(){
			// 	values[this.name] = $(this).val();
			// });

			// var userInput = values.city;
   //      	var url = "http://food2fork.com/api/search?key=0f3c05d712303cacf72b6230c8f9e793&q=" + userInput
			// $.get(url, function(data) {
			// 	$("#city_name").html(data.name);
			// 	temp = data.main.temp * (9/5) - 459.67;
			// 	temp = parseFloat(temp).toFixed(2);
			// 	$("#city_temp").html(temp);

			// }, 'json');
			// $("input[name=city]").val("");
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
<form method="post" action="process" id="ingredients">
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