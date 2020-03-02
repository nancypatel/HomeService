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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Home page...................
$route['Home'] = 'Welcome/home';
$route['login'] = 'LoginController/index';
$route['login_validation'] = 'main/login_validation';
$route['enter'] = 'main/enter';
$route['logout'] = 'main/logout';

// //header
// $route['header'] = 'Welcome/header';

//Registration ......
$route['Register'] = 'Welcome/Register';
//$route['Register/savedata'] = 'RegisterController/savedata';
$route['Register/displaydata'] = 'RegisterController/displaydata';

//category
$route['home'] = 'categoryController/index';
$route['category/(:any)'] = 'categoryController/category/$1';
 $route['category'] = 'categoryController/category';
$route['_category'] = 'API/ApiCategoryController/index';


//Contact us.....
$route['Contact'] = 'ContactController/index';
$route['Contact/view'] = 'ContactController/view';
$route['Contact/save'] = 'ContactController/save';
$route['Contact/edit/(:any)'] = 'ContactController/edit/$1';
$route['Contact/update'] = 'ContactController/update';
$route['Contact/delete/(:any)'] = 'ContactController/delete/$1';
$route['_contact'] = 'API/ApiContactController/index';
$route['_contact/add'] = 'API/ApiContactController/add';
$route['_contact/edit/(:any)'] = 'API/ApiContactController/edit/$1';
$route['_contact/update'] = 'API/ApiContactController/update';

//Booking
$route['About'] = 'Welcome/about';

//Admin dashboard
$route['Dashboard'] = 'AdminController/adminHome';
$route['Dashboard/adcategory'] = 'AdminController/adcategory';
$route['Dashboard/Addcat'] = 'AdminController/Addcat';
$route['Dashboard/EditCat'] = 'AdminController/EditCat';

//To display User
$route['User'] = 'UsersController/display';
$route['_User'] = 'API/ApiUserController/index';