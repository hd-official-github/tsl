<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'main';
$route['404'] = 'errors';


$route['search'] = 'main/submit_search';
$route['thespaline-business'] = 'Add_Business/index';
$route['thespaline-business/login'] = 'Add_Business/login';
$route['thespaline-business/signup'] = 'Add_Business/signup';
// $route['thespaline-business/login'] = 'Add_Business/login';
// $route['cat'] = 'main/catogery';
// $route['detail'] = 'main/bussiness_detail';


// $route['list'] = 'main/list';
// $route['text'] = 'text/index';
// $route['location'] = 'main';
$route['(:any)/submit_review/(:any)'] = 'main/submit_review/$1';
$route['(:any)/detail/(:any)'] = 'main/bussiness_detail/$1';
$route['(:any)/blog_list/(:any)'] = 'blogs/blog_list/$1/$2';
$route['(:any)/blogs/list'] = 'blogs/list';
$route['(:any)/blogs/'] = 'blogs/$1/';  // location blogs
$route['(:any)/blogs/(:any)'] = 'blogs/details/$1/$2';  // location blog details
$route['(:any)/category/(:any)'] = 'category/index/$1/$2'; // location category all
$route['(:any)/subcategory/(:any)/(:any)'] = 'subcategory/index/$1/$2/$3'; // location subcategory all
$route['(:any)'] = 'main/location/$1';

$route['(:any)/(:any)'] = 'category/index/$1/$2'; // location subcategory all
$route['(:any)/(:any)/(:any)'] = 'category/subcategory/$1/$2/$3'; // location subcategory all

// $route['dir/(:any)'] = 'dir/dir_details_without_location/$1';
// $route['(:any)/dir/(:any)'] = 'dir/dir_details/$1/$2';
// $route['(:any)/blogs/(:any)'] = 'blogs/details/$1/$2';
$route['translate_uri_dashes'] = FALSE;
