<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Pages::index');
$routes->get('/Events', 'Pages::event');
$routes->get('/Events/(:segment)', 'Pages::detailevent/$1');
$routes->get('/Admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/Admin/index', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/Admin/(:num)', 'Admin::detail/$1', ['filter' => 'role:admin']);
$routes->get('/Admin/adduser', 'Admin::adduser', ['filter' => 'role:admin']);
$routes->get('/Admin/edit/(:segment)', 'Admin::edit/$1', ['filter' => 'role:admin']);
$routes->delete('/Admin/(:num)', 'Admin::delete/$1', ['filter' => 'role:admin']);
$routes->get('/Admin/tables', 'Admin::tables', ['filter' => 'role:admin']);
$routes->get('/Admin/addevent', 'Admin::addevent', ['filter' => 'role:admin']);
$routes->get('/Admin/tambahevent', 'Admin::tambahevent', ['filter' => 'role:admin']);
$routes->get('/Admin/addsiswa', 'Admin::addsiswa', ['filter' => 'role:admin']);
$routes->get('/Admin/tambahsiswa', 'Admin::tambahsiswa', ['filter' => 'role:admin']);
$routes->get('/Admin/addsiswaevent', 'Admin::addsiswaevent', ['filter' => 'role:admin']);
$routes->get('/Admin/tambahsiswaevent', 'Admin::tambahsiswaevent', ['filter' => 'role:admin']);
$routes->get('/Admin/tables/(:num)', 'Admin::detailevent/$1', ['filter' => 'role:admin']);
$routes->delete('/Admin/tables/(:num)', 'Admin::deleteevent/$1', ['filter' => 'role:admin']);
$routes->get('/Admin/editevent/(:num)', 'Admin::editevent/$1', ['filter' => 'role:admin']);
$routes->get('/user', 'User::index', ['filter' => 'role:Guru']);
$routes->get('/user/absensi/(:num)', 'User::absensi/$1', ['filter' => 'role:Guru']);
$routes->get('/user/tambahabsensi/(:num)', 'User::tambahabsensi/$1', ['filter' => 'role:Guru']);
$routes->get('/user/hasil/(:num)', 'User::hasil/$1', ['filter' => 'role:Guru']);
$routes->get('/user/tambahhasil', 'User::tambahhasil', ['filter' => 'role:Guru']);



/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
