<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/halodunia', 'HelloWorld::halodunia');
$routes->get('/form', 'Mahasiswa::form');
$routes->post('/submit', 'Mahasiswa::submit'); 
$routes->get('/about', 'About::index');
$routes->get(from: '/profile', to: 'Halaman::profile');
$routes->get(from: '/experience', to: 'Halaman::experience');

$routes->get(from: '/crud', to: 'Crud::index');
$routes->get(from: '/tambah', to: 'Crud::tambah');
$routes->post(from: '/tambah', to: 'Crud::tambah');


$routes->get(from: '/edit/(:any)', to: 'Crud::edit/$1');
$routes->post(from: '/crud/update', to: 'Crud::update');

// Tambahan route detail dan hapus (POST)
$routes->get(from: '/detail/(:any)', to: 'Crud::detail/$1');
$routes->post(from: '/hapus/(:any)', to: 'Crud::hapus/$1');

$routes->get(from: '/hapus/(:any)', to: 'Crud::hapus/$1');
