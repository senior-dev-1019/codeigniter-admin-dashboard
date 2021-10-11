<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Clients
// $route['users/create'] = 'users/create';
// $route['users/update'] = 'users/update';
// $route['users/(:any)'] = 'users/view/$1';
$route['users'] = 'users/index';
// Calendar
$route['calendar'] = 'calendar/index';
$route['sms_form'] = 'sms/index';
$route['fullcalendar'] = 'fullcalendar';
// Tasks
$route['tasks/create'] = 'tasks/create';
$route['tasks/update'] = 'tasks/update';
$route['tasks/(:any)'] = 'tasks/view/$1';
$route['tasks'] = 'tasks/index';
// Invoices
$route['invoices/create'] = 'invoices/create';
$route['invoices/update'] = 'invoices/update';
$route['invoices/(:any)'] = 'invoices/view/$1';
$route['invoices'] = 'invoices/index';
// Clients
$route['clients/create'] = 'clients/create';
$route['clients/update'] = 'clients/update';
$route['clients/(:any)'] = 'clients/view/$1';
$route['clients'] = 'clients/index';
// Clients notes
$route['clients/notes/create'] = 'clients/notes/create';
$route['clients/notes/update'] = 'clients/notes/update';
$route['clients/notes/(:any)'] = 'clients/notes/view/$1';
$route['clients/notes'] = 'clients/notes/index';
// Appointments
$route['appointments/create'] = 'appointments/create';
$route['appointments/update'] = 'appointments/update';
$route['appointments/(:any)'] = 'appointments/view/$1';
$route['appointments'] = 'appointments/index';
// $route['posts/create'] = 'posts/create';
// $route['posts/update'] = 'posts/update';
// $route['posts/(:any)'] = 'posts/view/$1';
// $route['posts'] = 'posts/index';
$route['default_controller'] = 'pages/view';

$route['send-email'] = 'EmailController';
$route['email'] = 'EmailController/send';

$route['categories'] = 'categories/index';
$route['categories/create'] = 'categories/create';
$route['categories/posts/(:any)'] = 'categories/posts/$1';

$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



//$route['ecommerce/(:any)'] = 'ecommerce/view/$1';
//$route['ecommerce'] = 'ecommerce/index';
