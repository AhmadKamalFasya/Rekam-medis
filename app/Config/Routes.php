<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
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
$routes->get('/', 'Rekammedis::index');
$routes->get('/pegawai', 'Pegawai::index');
$routes->get('/pegawai/(:segment)', 'Pegawai::detail/$1');

$routes->get('/poli', 'Poli::index');
$routes->get('/poli/create', 'Poli::create');
$routes->get('/poli/edit/(:segment)', 'Poli::edit/$1');
$routes->delete('/poli/(:num)', 'Poli::delete/$1');
$routes->get('/poli/(:any)', 'Poli::detail/$1');

$routes->get('/obat', 'Obat::index');
$routes->get('/resep', 'Resep::index');
$routes->get('/pasien', 'Pasien::index');

$routes->get('/rekam', 'Rekammedis::index');




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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
