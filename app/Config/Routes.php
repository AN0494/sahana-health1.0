<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\PatientController;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('patients', 'PatientController::index');
$routes->get('/patient/create', 'PatientController::create');
$routes->post('/patient/store', 'PatientController::store');
