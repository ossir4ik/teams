<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'SignUp::new');
$routes->get('/schools/(:num)', 'Schools::show/$1');
$routes->get('/schools/index', 'Schools::index');
$routes->get('/schools/new', 'Schools::new');
$routes->post('/schools/store', 'Schools::store');
$routes->get('/schools/edit/(:num)', 'Schools::edit/$1');
$routes->post('/schools/update/(:num)', 'Schools::update/$1');
$routes->get('/schools/delete/(:num)', 'Schools::delete/$1');

$routes->get('/signup/new', 'SignUp::new');
$routes->post('/signup/store', 'SignUp::store');
$routes->get('/signup/success', 'SignUp::success');

$routes->get('/login/login-form', 'login::loginForm');
$routes->get('/logout', 'login::logout');
$routes->post('/login/store', 'login::store');

$routes->get('/users', 'userController::users');
$routes->get('/users/delete/(:num)', 'userController::delete/$1');
$routes->get('/users/edit/(:num)', 'userController::edit/$1');
$routes->post('/users/update/(:num)', 'userController::update/$1');

$routes->get('/teams/(:num)', 'TeamController::show/$1');
$routes->get('/teams/index', 'TeamController::index');
$routes->get('/teams/new', 'TeamController::new');
$routes->post('/teams/store', 'TeamController::store');
$routes->get('/teams/edit/(:num)', 'TeamController::edit/$1');
$routes->post('/teams/update/(:num)', 'TeamController::update/$1');
$routes->get('/teams/delete/(:num)', 'TeamController::delete/$1');


