<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'dashboard']);

// profile
$routes->group('profile', function ($routes) {
    $routes->get('/', 'ProfileController::index', ['as' => 'profile']);
    $routes->post('update/(:num)', 'ProfileController::update/$1', ['as' => 'update-profile']);
    $routes->post('change-password/(:num)', 'ProfileController::changePassword/$1', ['as' => 'change-password']);
});

$routes->group('auth', function ($routes) {
    $routes->get('login', 'AuthController::login', ['as' => 'login']);
    $routes->post('authenticate', 'AuthController::authenticate', ['as' => 'authenticate']);
    $routes->get('register', 'AuthController::register', ['as' => 'register']);
    $routes->post('store', 'AuthController::store', ['as' => 'signup']);
    $routes->get('logout', 'AuthController::logout', ['as' => 'logout']);
});
