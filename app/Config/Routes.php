<?php

use App\Controllers\Create;
use App\Controllers\Home;
use App\Controllers\ListArticle;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'index']);
$routes->get('/list-articles', [ListArticle::class, 'index'], ['as' => 'list_articles']);
$routes->get('/create', [Create::class, 'index'], ['as' => 'create']);
$routes->post('/create', [Create::class, 'post']);

$routes->get('/hapus/(:segment)', [Create::class, 'hapus/$1']);