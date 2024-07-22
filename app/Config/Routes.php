<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de'); 
$routes->get('usuarios', 'usuario_controller::usuarios');
$routes->get('catalogo', 'Home::catalogo');

// Rutas del Registro de Usuarios
$routes->get('registro', 'usuario_controller::registro');
$routes->post('store', 'usuario_controller::formValidation');

// Rutas del Login
$routes->get('login', 'Login_controller');
$routes->post('enviarlogin', 'Login_controller::auth');
$routes->get('panel', 'Panel_controller::index', ['filter' => 'auth']);
$routes->get('logout', 'Login_controller::logout'); 







