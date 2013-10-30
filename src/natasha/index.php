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
} else {
    $html = '<html><body><h1>404</h1></body></html>';
    $response = new Response($html, 404);
}

$response->send();




/*echo $summerTitle.'<br>';
echo 'Fold - '. $mySummer->fold() .'<br><br>';*/

/*echo $transformerTitle.'<br>';
echo 'Fold - '. $myTransformer->fold().'<br>';
echo 'ProtectCold - '. $myTransformer->protectCold().'<br>';
echo 'ReversibleHandle - '. $myTransformer->reversibleHandle().'<br>';
*/

/*$response = new Response();
$response->setContent($myTransformer->priceTitle());
$response->setStatusCode(200);
$response->headers->set('Content-Type', 'text/html');
$response->send();*/

