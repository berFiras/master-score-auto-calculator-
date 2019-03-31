<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['users/register'] = 'Users/register';
$route['notes/register'] = 'Notes/notes';
$route['admin/login'] = 'Admin/login';


$route['default_controller'] = 'Application/home';
//$route['(:any)']= '';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

