<!DOCTYPE html>
<html>
<head>
	<title>Recipe Responses</title>
	

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

</body>
</html>