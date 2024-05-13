<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */ 
$routes->get('/', 'Home::index');

$routes->get('/v2', 'Home::version');
$routes->get('/v2(:num)', 'Home::version/$1');
$routes->get('/v2(:num)/(:any)', 'Home::version/$1/$2');


$routes->get('login', 'Login::index');
$routes->get('register', 'Register::index');

$routes->post('login', 'Login::do_login');
$routes->post('register', 'Register::do_register');

$routes->get('logout', 'Login::logout');

 
$routes->get('dashboard', 'Dashboard::index');

// $routes->setDefaultNamespace('App/Controllers');
// $routes->setDefaultController('Home');
// $routes->setDefaultMethod('index');
// $routes->setTranslateURIDashes(false);
// $routes->setAutoRoute(true);
// $routes->set404Override();




