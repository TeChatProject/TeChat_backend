<?php

namespace Config;

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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Auth::index');
$routes->group('',['filter'=>'AuthCheck'],function($routes){
	$routes->get('/dashboard','Dashboard::index');
	$routes->get('/dashboard/profile/(:num)','Dashboard::profile/$1');
	$routes->get('/dashboard/friends','Dashboard::friends');
	$routes->get('/dashboard/activities','Dashboard::activities');
	$routes->post('/dashboard/post','Dashboard::post');
	$routes->post('/dashboard/pp','Dashboard::pp');
	$routes->get('/dashboard/places','Dashboard::places');
	$routes->post('/dashboard/etk_ekle','Dashboard::etk_ekle');
	$routes->post('dashboard/katil','Dashboard::katil');
});
$routes->group('',['filter'=>'AuthCheck'],function($routes){
	$routes->get('dashboard/friends/add','Dashboard::add');
	$routes->get('dashboard/friends/req','Dashboard::req');
	$routes->post('dashboard/friends/addaction','Dashboard::addaction');
	$routes->post('dashboard/friends/reqaction','Dashboard::reqaction');
});

/*
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
