<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------
*/

// Main students list (GUI)
$router->get('CRUD2/students', 'StudentsController::index');
$router->get('CRUD2/students/index', 'StudentsController::index');

// Create student (POST)
$router->post('CRUD2/students/create', 'StudentsController::create');

// Edit student form (GET)
$router->get('CRUD2/students/edit/{id}', 'StudentsController::edit');

// Update student (POST)
$router->post('CRUD2/students/update/{id}', 'StudentsController::update');

// Delete student (GET)
$router->get('CRUD2/students/delete/{id}', 'StudentsController::delete');

// Optional: set default route to students/index
$router->get('CRUD2', 'StudentsController::index');
$router->get('/', 'StudentsController::index'); // fallback
