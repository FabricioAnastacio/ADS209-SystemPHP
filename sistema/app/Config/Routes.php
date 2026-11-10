<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
// Rotas públicas
$routes->get('/', 'Home::index');
$routes->get('/home', 'ConteudoController::index');
$routes->get('/contato', 'ConteudoController::contato');

service('auth')->routes($routes);

$routes->get('sobre', 'Site::sobre');

$routes->post('usuarios', 'Admin\Usuarios::store', [
    'filter' => ['session', 'permission:users.create'],
]);

// Rotas que exigem autenticação por sessão
$routes->group('', ['filter' => 'session'], static function ($routes) {
    // Listagem, formulário de edição e atualização
    $routes->get('conteudos', 'ConteudoController::listar');
    $routes->get('conteudos/editar/(:num)', 'ConteudoController::editar/$1');
    $routes->post('conteudos/atualizar/(:num)', 'ConteudoController::atualizar/$1');
});

$routes->get('admin', 'Admin\Painel::index', [
    'filter' => ['session', 'group:admin'],
]);
