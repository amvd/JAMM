<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "main";
$route['404_override'] = '';
$route['users/user_profile/(:any)'] = "/users/user_profile/$1";
$route['chefs/chef_profile/(:any)'] = "/chefs/chef_profile/$1";


//end of routes.php