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

$route['default_controller'] = "home";

$route['dashboard/new_account'] = "admin/new_account";
$route['dashboard/new_password'] = "admin/new_password";

$route['dashboard/category'] = "categories";
$route['dashboard/category/add'] = "categories/add";
$route['dashboard/category/edit'] = "categories/edit";
$route['dashboard/category/delete/(:num)'] = "categories/delete";


$route['dashboard/testimonials'] = "testimonials";
$route['dashboard/testimonials/add'] = "testimonials/add";
$route['dashboard/testimonials/edit/(:num)'] = "testimonials/edit";
$route['dashboard/testimonials/delete/(:num)'] = "testimonials/delete";


$route['dashboard/covers'] = "covers";
$route['dashboard/covers/add'] = "covers/add";
$route['dashboard/covers/edit/(:num)'] = "covers/edit";
$route['dashboard/covers/delete/(:num)'] = "covers/delete";

$route['dashboard/gallery/(:num)'] = "galleryDashboard";
$route['dashboard/gallery/add'] = "galleryDashboard/add";
$route['dashboard/gallery/edit/(:num)'] = "galleryDashboard/edit";
$route['dashboard/gallery/delete/(:num)'] = "galleryDashboard/delete";


$route['dashboard/portfolios'] = "portfolios";
$route['dashboard/portfolios/add'] = "portfolios/add";
$route['dashboard/portfolios/edit/(:num)'] = "portfolios/edit";
$route['dashboard/portfolios/delete/(:num)'] = "portfolios/delete";
//$route['dashboard/blogs'] = "ContentManagementBlog";

//$route['about'] = "about_us";
//$route['contact'] = "contact_us";
//$route['vendor/(:num)'] = "vendor/test";
//$route['404_override'] = '';




/* End of file routes.php */
/* Location: ./application/config/routes.php */