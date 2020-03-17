<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['detail/(:num)'] = 'home/detail/$1';
$route['info-flayer'] = 'flyer';
$route['detail-flyer/(:any)'] = 'flyer/detail/$1';
$route['office'] = 'home/office';
$route['peta-kab'] = 'peta';
$route['detail-peta/(:num)'] = 'peta/detail/$1';


// admin route
$route['admin/newsupdate/(:num)'] = 'admin/edit/$1';
$route['admin/news/(:num)/update'] = 'admin/update/$1';

$route['admin/category'] = 'AdminCategory';
$route['admin/category/add'] = 'AdminCategory/store';
$route['admin/category/(:num)/delete'] = 'AdminCategory/destroy/$1';
$route['admin/category/(:num)/edit'] = 'AdminCategory/edit/$1';
$route['admin/category/(:num)/update'] = 'AdminCategory/update/$1';
$route['admin/category/(:num)/sub'] = 'AdminCategory/viewSub/$1';

$route['admin/sub-category/(:num)/edit'] = 'AdminCategory/editSub/$1';
$route['admin/sub-category/(:num)/update'] = 'AdminCategory/updateSub/$1';
$route['admin/sub-category/(:num)/delete'] = 'AdminCategory/destroySub/$1';


$route['admin/flyer'] = 'AdminFlyer';
$route['admin/flyer/add'] = 'AdminFlyer/store';
$route['admin/flyer/(:num)/edit'] = 'AdminFlyer/edit/$1';
$route['admin/flyer/(:num)/update'] = 'AdminFlyer/update/$1';
$route['admin/flyer/(:num)/delete'] = 'AdminFlyer/destroy/$1';

$route['admin/peta'] = 'AdminPeta';
$route['admin/peta/add'] = 'AdminPeta/store';
$route['admin/peta/(:num)/edit'] = 'AdminPeta/edit/$1';
$route['admin/peta/(:num)/update'] = 'AdminPeta/update/$1';
$route['admin/peta/(:num)/delete'] = 'AdminPeta/destroy/$1';

$route['admin/setting/(:num)/update'] = 'Admin/settingUpdate/$1';

$route['login'] = 'Auth';
$route['auth/check'] = 'Auth/login';
$route['auth/logout'] = 'Auth/logout';
