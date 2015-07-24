<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "main";
$route['404_override'] = '';
$route['users/user_profile/(:any)'] = "/users/user_profile/$1";
$route['chefs/chef_profile/(:any)'] = "/chefs/chef_profile/$1";
$route['foods/all_food/(:any)'] = "/foods/all_food/$1";
$route['foods/all_food_by_cuisine/(:any)/(:any)'] = "/foods/all_food_by_cuisine/$1/$2";
$route['foods/all_food_no_filter/(:any)'] = "/foods/all_food_no_filter/$1";
$route['foods/all_food_by_city/(:any)'] = "/foods/all_food_by_city/$1";


//end of routes.php