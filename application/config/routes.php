<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'MapController';
$route['coordinate'] = 'CoordinateController';
$route['show'] = 'MapController/show';
$route['donation/show/(:num)'] = 'MapController/donation/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


