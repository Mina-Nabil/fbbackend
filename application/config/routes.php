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
$route['default_controller'] = 'Main/login';
$route['home'] = 'Main/home';
$route['login'] = 'Main/login';
$route['login/checkdata'] = 'Main/checkLoginData';

//Courses ROUTES
$route['courses'] = 'Courses/home';
$route['courses/insert'] = 'Courses/insert';
$route['courses/add'] = 'Courses/add';
$route['courses/update/(:any)'] = 'Courses/update/$1';
$route['courses/edit/(:any)'] = 'Courses/edit/$1';
$route['courses/delete/(:any)'] = 'Courses/delete/$1';

//Exams ROUTES
$route['exams'] = 'Exams/home';
$route['exams/insert'] = 'Exams/insert';
$route['exams/add'] = 'Exams/add';
$route['exams/update/(:any)'] = 'Exams/update/$1';
$route['exams/edit/(:any)'] = 'Exams/edit/$1';
$route['exams/delete/(:any)'] = 'Exams/delete/$1';
$route['exams/(:any)'] = 'Exams/home/$1';

//Benefits ROUTES
$route['benefits'] = 'Benefits/home';
$route['benefits/insert'] = 'Benefits/insert';
$route['benefits/add'] = 'Benefits/add';
$route['benefits/update/(:any)'] = 'Benefits/update/$1';
$route['benefits/edit/(:any)'] = 'Benefits/edit/$1';
$route['benefits/delete/(:any)'] = 'Benefits/delete/$1';
$route['benefits/(:any)'] = 'Benefits/home/$1';

//Topics ROUTES
$route['topics'] = 'Topics/home';
$route['topics/insert'] = 'Topics/insert';
$route['topics/add'] = 'Topics/add';
$route['topics/update/(:any)'] = 'Topics/update/$1';
$route['topics/edit/(:any)'] = 'Topics/edit/$1';
$route['topics/delete/(:any)'] = 'Topics/delete/$1';
$route['topics/(:any)'] = 'Topics/home/$1';

//Candidates ROUTES
$route['candidates'] = 'Candidates/home';
$route['candidates/insert'] = 'Candidates/insert';
$route['candidates/add'] = 'Candidates/add';
$route['candidates/update/(:any)'] = 'Candidates/update/$1';
$route['candidates/edit/(:any)'] = 'Candidates/edit/$1';
$route['candidates/delete/(:any)'] = 'Candidates/delete/$1';
$route['candidates/(:any)'] = 'Candidates/home/$1';

//Instructors ROUTES
$route['instructors'] = 'Instructors/home';
$route['instructors/insert'] = 'Instructors/insert';
$route['instructors/add'] = 'Instructors/add';
$route['instructors/update/(:any)'] = 'Instructors/update/$1';
$route['instructors/edit/(:any)'] = 'Instructors/edit/$1';
$route['instructors/delete/(:any)'] = 'Instructors/delete/$1';

//Instructors ROUTES
$route['teachings'] = 'Teachings/home';
$route['teachings/insert'] = 'Teachings/insert';
$route['teachings/add'] = 'Teachings/add';
$route['teachings/update/(:any)'] = 'Teachings/update/$1';
$route['teachings/edit/(:any)'] = 'Teachings/edit/$1';
$route['teachings/delete/(:any)'] = 'Teachings/delete/$1';

//Blogs ROUTES
$route['blogs'] = 'Blogs/home';
$route['blogs/insert'] = 'Blogs/insert';
$route['blogs/add'] = 'Blogs/add';
$route['blogs/update/(:any)'] = 'Blogs/update/$1';
$route['blogs/edit/(:any)'] = 'Blogs/edit/$1';
$route['blogs/delete/(:any)'] = 'Blogs/delete/$1';

//Users ROUTES
$route['users'] = 'Users/home';
$route['users/insert'] = 'Users/insert';
$route['users/add'] = 'Users/add';
$route['users/update/(:any)'] = 'Users/update/$1';
$route['users/edit/(:any)'] = 'Users/edit/$1';
$route['users/delete/(:any)'] = 'Users/delete/$1';

//SiteDate
$route['site_data'] = 'Site_data/home';
$route['site_data/update/(:any)'] = 'Site_data/update/$1';
$route['site_data/edit/(:any)'] = 'Site_data/edit/$1';

//ContactUS ROUTES
$route['contactus'] = 'Contactus/home';
$route['contactus/update'] = 'Contactus/update';
$route['contactus/edit'] = 'Contactus/edit';

//ContactUS ROUTES
$route['slides'] = 'Slides/home';
$route['slides/update'] = 'Slides/update';
$route['slides/edit'] = 'Slides/edit';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
