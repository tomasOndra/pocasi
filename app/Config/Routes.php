<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get("bundesland", "Main::bundesland");
$routes->get('stations/(:num)', 'Main::stations/$1');
$routes->get('station_data/(:num)', 'Main::station_data/$1');
$routes->get('bundesland/detail/(:num)', 'Main::detail/$1');

$routes->get('data/delete', 'Delete::deleteForm');
$routes->post('data/deleteMonth', 'Delete::deleteMonth');