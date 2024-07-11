<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('/pages', 'Pages:index');


$routes->group('', ['namespace' => 'App\Controllers'], static function ($routes) {
    $routes->get('/', 'Pages::index');
    $routes->get('/about', 'Pages::about');
    $routes->get('/contact', 'Pages::contact');
    // Komik
    $routes->get('/komik', 'Komiks::index');
    $routes->get('/komik/create', 'Komiks::create');
    $routes->get('/komik/(:segment)', 'Komiks::detail/$1');
    $routes->post('/komik/save', 'Komiks::save');
});

