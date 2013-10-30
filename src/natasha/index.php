<?php

namespace natasha;

require_once '../../vendor/autoload.php';
require_once 'controllers.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

//Внутренняя маршрутизация

$request = Request::createFromGlobals();
$uri = $request->getPathInfo();
// $uri = $_SERVER['REQUEST_URI'];

if ($uri == '/') {
    $response = countriesAction();
} elseif ($uri == '/ukraineView') {
    $response = ukraineAction();
} elseif ($uri == '/estoniaView') {
    $response = estoniaAction();
} else {
    $html = '<html><body><h1>404</h1></body></html>';
    $response = new Response($html, 404);
}

$response->send();

