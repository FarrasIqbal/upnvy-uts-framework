<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('tentang-upn', 'Home::tentang');
$routes->get('detail-sejarah', 'Home::sejarahUpn');
$routes->get('pendidikan', 'Home::pendidikan');
$routes->get('download', 'Home::download');

$routes->get('berita/(:any)', 'Home::detailBerita/$1');
$routes->get('pengumuman/(:segment)', 'Home::detailPengumuman/$1');

$routes->get('pendidikan/(:any)', 'Home::detailFakultas/$1');

$routes->get('semua-berita', 'Home::semuaBerita');
$routes->get('semua-pengumuman', 'Home::semuaPengumuman');

$routes->get('login', 'Auth::index');
$routes->post('login/process', 'Auth::process');
$routes->get('logout', 'Auth::logout');


// Admin Routes
$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    // Berita
    $routes->get('berita', 'AdminBerita::index');
    $routes->get('berita/create', 'AdminBerita::create');
    $routes->post('berita/save', 'AdminBerita::save');
    $routes->delete('berita/(:num)', 'AdminBerita::delete/$1');
    $routes->get('berita/edit/(:num)', 'AdminBerita::edit/$1');
    $routes->post('berita/update/(:num)', 'AdminBerita::update/$1');

    // Pengumuman
    $routes->get('pengumuman', 'AdminPengumuman::index');
    $routes->get('pengumuman/create', 'AdminPengumuman::create');
    $routes->post('pengumuman/save', 'AdminPengumuman::save');
    $routes->delete('pengumuman/(:num)', 'AdminPengumuman::delete/$1');
    $routes->get('pengumuman/edit/(:num)', 'AdminPengumuman::edit/$1');
    $routes->post('pengumuman/update/(:num)', 'AdminPengumuman::update/$1');

    // Sejarah
    $routes->get('sejarah', 'AdminSejarah::index');
    $routes->get('sejarah/edit/(:num)', 'AdminSejarah::edit/$1');
    $routes->post('sejarah/update/(:num)', 'AdminSejarah::update/$1');
});
