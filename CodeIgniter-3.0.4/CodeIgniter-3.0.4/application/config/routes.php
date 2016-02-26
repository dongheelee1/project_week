<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Logins';
$route['process'] = 'recipes/getRecipe';
$route['reload'] = 'recipes/refresh';
$route['Logins/logout'] = 'Logins/logout';
$route['home'] = 'Logins/getErrors';
$route['resources'] = 'recipes/whyIsThisNecessary';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

?>
