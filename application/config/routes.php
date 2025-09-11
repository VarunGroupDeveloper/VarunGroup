<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['history'] = 'home/history';
$route['leadership'] = 'home/leadership';
$route['business'] = 'home/business';
$route['business'] = 'home/business';
$route['news_and_updates'] = 'home/news_and_updates';
$route['blogs'] = 'home/blogs';
$route['gallery'] = 'home/gallery';
$route['community'] = 'home/community';
$route['contact'] = 'home/contact';
$route['automobile_dealership']='home/automobile';
$route['autofinance']='home/autofinance';
$route['infrastructure']='home/infrastructure';
$route['hospitality']='home/hospitality';
$route['agriculture']='home/agriculture';

//admin - auth
$route['admin'] = 'admin/login';
$route['admin/login_authenticate'] = 'admin/login_authenticate';
$route['admin/logout'] = 'admin/logout';
$route['dashboard'] = 'admin/dashboard';

// ✅ User Management (Super Admin Only)
$route['users'] = 'admin/users';
$route['admin/users/add'] = 'admin/add_user';
$route['admin/users/edit/(:num)'] = 'admin/edit_user/$1';
$route['admin/users/delete/(:num)'] = 'admin/delete_user/$1';

//banners
$route['admin/banners'] = 'admin/banner';
$route['admin/banners/add'] = 'admin/add_banner';
$route['admin/banners/delete/(:num)'] = 'admin/delete_banner/$1';
$route['admin/banners/edit/(:num)'] = 'admin/edit_banner/$1';