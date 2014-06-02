<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
/* test */
$route['about'] = 'pages/about';
$route['test'] = 'pages/test';


/* calendar */
$route['big_calendar'] = 'calendars/big_calendar';
$route['calendars/set_event/(:any)'] = 'calendars/set_event_to_calendar/$1';

/* user */
$route['login/(:any)'] = 'users/login/$1';
$route['logout'] = 'users/logout';
$route['friendlist'] = 'users/friendlist_fb';
$route['userlist'] = 'users/user_list';

/* infos */
$route['developer'] = 'infos/parse_intern';
$route['parse_art'] = 'infos/parse_art';
$route['parse_exchange'] = 'infos/parse_exchange';
$route['parse_volunteer'] = 'infos/parse_volunteer';
$route['index_get_data/(:any)'] = 'infos/index_get_data/$1';
$route['home'] = 'infos/home';
$route['infos/view/(:any)'] = 'infos/view/$1';
$route['infos/(:any)'] = 'infos/category/$1';
$route['infos'] = 'infos/index';
$route['new'] = 'infos/newpage';
$route['insert'] = 'infos/insert';
$route['edit/(:any)'] = 'infos/editpage/$1';
$route['update'] = 'infos/update';
$route['categories/(:any)'] = 'infos/get_sub_categories/$1';

$route['default_controller'] = "infos/index";
$route['(:any)'] = 'pages/view/$1';



/* End of file routes.php */
/* Location: ./application/config/routes.php */
