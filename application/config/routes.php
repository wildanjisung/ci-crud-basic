<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;*/

$route['news/create'] = 'news/create'; // create new article
$route['news/(:any)'] = 'news/view/$1'; // view detail article
$route['news/delete/(:any)'] = 'news/delete/$1';
$route['news/update/(:any)'] = 'news/update/$1';
$route['news'] = 'news'; // list article

$route['(:any)'] = 'pages/view/$1'; // page home or about,
$route['default_controller'] = 'pages/view'; // default home

// http://localhost/3-ci/CodeIgniter-3.1.9/index.php/pages/view/about
// http://localhost/3-ci/CodeIgniter-3.1.9/index.php/about