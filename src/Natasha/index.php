<?php

namespace Natasha;

require_once '../../vendor/autoload.php';

use Natasha\Controllers;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

//Внутренняя маршрутизация

$request = Request::createFromGlobals();
$uri = $request->getPathInfo();

switch($uri)
{
    case '/':
        $response = Controllers::countriesAction();
        break;
    case '/ukraineView':
        $response = Controllers::ukraineAction();
        break;
    case '/estoniaView':
        $response = Controllers::estoniaAction();
        break;
    default:
        $html = '<html><body><h1>404</h1></body></html>';
        $response = new Response($html, 404);
}

$response->send();



