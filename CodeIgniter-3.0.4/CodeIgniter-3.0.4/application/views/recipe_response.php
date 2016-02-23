<!DOCTYPE html>
<html>
<head>
	<title>Recipe Responses</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		$('div .images').click(function(){
			
		})
	})
	</script>

</head>
<body>
<h2><?=$userinfo['first_name']; ?>, here are your recipes! </h2>
<?php 
	var_dump($data);
	$php_data = json_decode($data, true);
	var_dump($php_data['count']);
	$random_object = rand(0, $php_data['count']); //randomized object count

	var_dump($php_data);
	var_dump($php_data['recipes'][$random_object]);


?>


    <div class='images'>

    </div>
    <div class="title">
    <div class="recipe">
    </div>
    
     </div>

</body>
</html>