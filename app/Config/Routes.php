<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/home','ConteudoController: :index');
$routes->get('/contato','ConteudoController: :contato');

//Listagem, formulario de edição e atualização
$routes->get('conteudos', 'ConteudoController::listar');
$routes->get('conteudos/editar/(:num)', 'ConteudoController::editar/$1');
$routes->post('conteudos/atualizar/(:num)','ConteudoController::atualizar/$1');

service('auth')->routes($routes);

// Painel: exige login e grupo admin
$routes->get('admin', 'Admin\Painel::index', [
    'filter' => ['session', 'group:admin'],
]);

// Logout: aceita apenas usuários autenticados
$routes->post('admin/sair', 'Admin\Painel::logout', [
    'filter' => 'session',
]);
