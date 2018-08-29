<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'individualcontroller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['register_individual'] = 'individualcontroller/register_individual';
$route['donate_now'] = 'individualcontroller/donate_now';
$route['logged_in'] = 'individualcontroller/logged_in';
$route['social'] = 'individualcontroller/social';
$route['homepage2'] = 'individualcontroller/homepage2';
$route['donatemore'] = 'individualcontroller/donatemore';

$route['company'] = 'companycontroller/index';
$route['addCompany'] = 'companycontrollery/addCompany';