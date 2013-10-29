<?php

require_once 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$uri1 = $request->getPathInfo();

$response = new Response();
$response->setContent('SummerPerambulator');
$response->setStatusCode(200);
$response->headers->set('Content-Type', 'text/html');
$response->send();