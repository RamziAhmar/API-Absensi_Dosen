<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->post('/login', 'Auth::proses');
$routes->get('/logout', 'Auth::logout');

$routes->get('/home', 'Home::index');
$routes->get('/hadir', 'Home::hadir');
$routes->get('/absen/(:any)', 'Home::absen/$1');

$routes->get('/user', 'User::index');
$routes->get('/user/tambah', 'User::create');
$routes->post('/user/insert', 'User::insert');

$routes->get('/dosen', 'Dosen::index');
$routes->get('/dosen/tambah', 'Dosen::create');
$routes->post('/dosen/insert', 'Dosen::insert');

$routes->get('/matkul', 'Matkul::index');
$routes->get('/matkul/tambah', 'Matkul::create');
$routes->post('/matkul/insert', 'Matkul::insert');

$routes->get('/jadwal', 'Jadwal::index');
$routes->get('/jadwal/tambah', 'Jadwal::create');
$routes->post('/jadwal/insert', 'Jadwal::insert');

$routes->get('/absensi', 'Absensi::index');
$routes->get('/absensi/tambah', 'Absensi::create');
$routes->post('/absensi/insert', 'Absensi::insert');

