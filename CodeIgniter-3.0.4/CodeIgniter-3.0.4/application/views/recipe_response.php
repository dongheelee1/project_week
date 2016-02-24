<!DOCTYPE html>
<html>
<head>
	<title>Recipe Responses</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
	integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
	integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="/assets/recipes_styling.css">
	<script>
	$(document).ready(function(){
		$('div .images').click(function(){
			
		})
	})
	</script>

</head>
<body>
	<div class="jumbotron">
		<h1 class="text-center" style="font-family:calibri; color:white;"><?=$userinfo['first_name']; ?>, hope you're hungry </h1>
		<p class="text-center" style="font-family:calibri; color:white;">__________  *  ___________ </p>
		<?php 
			//var_dump($data);
			$php_data = json_decode($data, true);
			//var_dump($php_data['count']);
			$random_object = rand(0, $php_data['count']-1); //randomized object count

			//var_dump($php_data);
			//var_dump($php_data['recipes'][$random_object])
		?>

			<div id="wrapper">
			 	<h5 class="text-center" style="font-family:calibri; color:white;"><i><?php echo $php_data['recipes'][$random_object]['title']?></i></h5>
			 	<div>
			 		<form action='/recipes/redirectHome' method= 'post'>
			 			<p class="text-center" style="font-family:calibri; color:white;">Click the image for the recipe or click here to find more recipes! </p>
			 			<input type='submit' value='Restart' class="btn btn-inline-block" id="restart" style="background-color: #9ba04d; color: white"><br>
			 		</form>
			 		<a href="<?php echo $php_data['recipes'][$random_object]['source_url'] ?>">
			 		<img src="<?php echo $php_data['recipes'][$random_object]['image_url']?>" class="img-responsive" ></a>
			 	</div>
			 </div>
	</div>

</body>
</html>