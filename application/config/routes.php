<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['Pelangi'] = 'welcome/pelangi';
$route['balonku'] = 'welcome/balonku';
$route['kebunku'] = 'welcome/kebunku';
$route['kereta'] = 'welcome/kereta';
$route['cicak'] = 'welcome/cicak';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
