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

//$route['default_controller'] = "welcome";
//$route['404_override'] = '';


$route['default_controller'] = "doralautomall";
$route['404_override'] = 'Error 404';

//Peticiones GET: utilizadas para la consulta de recursos, que pueden ser HTML, JSON, XML u otros formatos.
//if ( $_SERVER['REQUEST_METHOD'] == 'GET' )
//{
//}
//Peticiones POST:  utilizadas para la creación de nuevos elementos (registro de un nuevo user, nuevo post, nuevo comentario, etc...)
//else if ( $_SERVER['REQUEST_METHOD'] == 'POST' )
//{	
//}
if ( $_SERVER['REQUEST_METHOD'] == 'GET' )
{
	$route['home'] = 'doralautomall';
	$route['construccion'] = 'doralautomall/construccion';
	$route['home'] = 'doralautomall/home';
	$route['find'] = 'doralautomall/find';
	$route['financing'] = 'doralautomall/financing';
	$route['about'] = 'doralautomall/about';
	$route['location'] = 'doralautomall/location';
	$route['contact'] = 'doralautomall/contact';
}
else {
	$route['send_email'] = 'doralautomall/send_email';
	$route['(:any)']= 'doralautomall';
}

/* End of file routes.php */
/* Location: ./application/config/routes.php */