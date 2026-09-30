<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\PatientController;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('patients', 'PatientController::index');
$routes->get('/patients/create', 'PatientController::create');
$routes->post('/patients/store', 'PatientController::store');
