<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Dashboard';
$route['admin/daftar_user'] = 'admin/View_controller/index';
$route['admin/tambah_user'] = 'admin/View_controller/addUser';
$route['admin/tambah_user/process'] = 'admin/View_controller/pro_add_user';



$route['siswa/daftar_logbook'] = 'siswa/Main_controller/index';
$route['siswa/logbook/kirim_logbook/(:any)/(:any)'] = 'siswa/Main_controller/sendLogBook/$1/$2';
$route['siswa/logbook/kirim_logbook/process/(:any)/(:any)'] = 'siswa/Main_controller/proLogBook/$1/$2';
$route['siswa/registrasi_program'] = 'siswa/Main_controller/registerProgram';
$route['siswa/process/registrasi_program'] = 'siswa/Main_controller/proRegisterProgram';
$route['siswa/profil'] = 'siswa/Main_controller/profilBiodata';
$route['siswa/logbook/waktu'] = 'siswa/Main_controller/waktuLog';
$route['siswa/logbook/waktu/process'] = 'siswa/Main_controller/setTimeLog';
$route['siswa/logbook/waktu/minggu'] = 'siswa/Main_controller/mingguLog';
$route['siswa/logbook/waktu/minggu/harian/(:any)'] = 'siswa/Main_controller/harianLog/$1';


$route['pembimbing/daftar_logbook'] = 'pembimbing/Main_controller/index';

// auth
$route['login'] = 'Auth_controller/login';
$route['auth/login'] = 'Auth_controller/process_login';
$route['logout'] = 'Auth_controller/logout';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
