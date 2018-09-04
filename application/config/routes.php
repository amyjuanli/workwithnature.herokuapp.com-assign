<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'individualcontroller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['register_individual'] = 'IndividualController/register_individual';
$route['donate_now'] = 'IndividualController/donate_now';
$route['logged_in'] = 'IndividualController/logged_in';
$route['social'] = 'IndividualController/social';
$route['homepage2'] = 'IndividualController/homepage2';
$route['donatemore'] = 'IndividualController/donatemore';

$route['company'] = 'CompanyController/index';
$route['addCompany'] = 'CompanyController/addCompany';
$route['coordinate'] = 'CoordinateController';
$route['show'] = 'MapController/show';
$route['donation/show/(:num)'] = 'MapController/donation/$1';
$route['map'] = 'MapController';
$route['maploader'] = 'MapController/maploader';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// coordinates 
$route['assign'] = 'admin/koordinatjembatan';