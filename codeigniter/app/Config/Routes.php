<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->post('login', 'Home::login');
$routes->get('logout', 'Home::logout');

$routes->get('student', 'Student::index');
$routes->get('student/get_json', 'Student::get_json');

$routes->get('teacher', 'Teacher::index');
$routes->get('teacher/get_json', 'Teacher::get_json');

$routes->get('morality', 'Morality::index');
$routes->get('morality/get_json', 'Morality::get_json');
$routes->post('morality/update_json', 'Morality::update_json');

$routes->get('library', 'Library::index');
