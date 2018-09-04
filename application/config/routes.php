<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'individualcontroller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['register_individual'] = 'IndividualController/register_individual';
$route['donate_now'] = 'individualcontroller/donate_now';
$route['logged_in'] = 'individualcontroller/logged_in';
$route['social'] = 'individualcontroller/social';
$route['homepage2'] = 'individualcontroller/homepage2';
$route['donatemore'] = 'individualcontroller/donatemore';

$route['company'] = 'companycontroller/index';
$route['addCompany'] = 'companycontroller/addCompany';
$route['coordinate'] = 'CoordinateController';
$route['show'] = 'MapController/show';
$route['donation/show/(:num)'] = 'MapController/donation/$1';
$route['map'] = 'MapController';
$route['maploader'] = 'MapController/maploader';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// coordinates 
$route['assign'] = 'admin/koordinatjembatan';