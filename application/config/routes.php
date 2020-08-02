<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
$route['default_controller'] = 'home';
// $route['default_controller'] = 'TestLanguage';
$route['admin/sliders'] = "Admin/sliders";
$route['admin/students'] = "Admin/students";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



// my route
$route['users']="/users/users/method_index";

$route['nadmin/nprog']="/nadmin/admin/new_prog";
$route['nadmin/list_user']="/nadmin/admin/list_user";

$route['nadmin/list_progs']="/nadmin/admin/list_progs";

$route['nadmin/user/info/(:any)'] = 'nadmin/admin/user_info/$1';

// session
$route['nadmin/user/new_sesson/(:any)'] = 'nadmin/admin/new_sesson/$1';
$route['nadmin/sesson/new'] = 'nadmin/sesson/new';
$route['nadmin/mysession/details/:session_code'] = 'nadmin/mysession/edit';
$route['nadmin/msession/new'] = 'nadmin/mysession/new_session';


// course
$route['nadmin/ncourse']="/nadmin/course/new_course";
$route['nadmin/course/edit/']="/nadmin/course/edit";
$route['nadmin/course/delete/:course_code']="/nadmin/course/delete";


$route['login']="/users/users/login";


// users
$route['users/list_progs']="/users/users/list_progs";
