<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/home', 'Home::index');

$routes->get('/user', 'User::index');
$routes->get('/user/tambah', 'User::create');

$routes->get('/dosen', 'Dosen::index');

$routes->get('/matkul', 'Matkul::index');

$routes->get('/jadwal', 'Jadwal::index');

$routes->get('/absensi', 'Absensi::index');
