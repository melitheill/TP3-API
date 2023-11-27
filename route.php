<?php

require_once 'library/Router.php';
require_once 'app/controller/CancionesApiController.php';
require_once 'app/controller/ArtistasApiController.php';

$router = new Router();

$router->addRoute('canciones', 'GET', 'CancionesApiController', 'getCanciones');
$router->addRoute('canciones/:ID', 'GET', 'CancionesApiController', 'getCanciones');
$router->addRoute('artistas', 'GET', 'ArtistasApiController', 'get');
$router->addRoute('artistas', 'POST', 'ArtistasApiController', 'create');




$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
