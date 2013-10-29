<?php

namespace natasha;

require_once 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$mySummer = new SummerPerambulator('Chikko','7','3');
echo $mySummer->priceTitle().'<br>';
echo 'Fold - '. $mySummer->fold() .'<br><br>';

$myTransformer = new TransformerPerambulator('GoodBaby','15','4');
echo $myTransformer->priceTitle().'<br>';
echo 'Fold - '. $myTransformer->fold().'<br>';
echo 'ProtectCold - '. $myTransformer->protectCold().'<br>';
echo 'ReversibleHandle - '. $myTransformer->reversibleHandle().'<br>';


echo '<br>';
echo '<br>';
echo '<br>';
$response = new Response();
$response->setContent($myTransformer->priceTitle());
$response->setStatusCode(200);
$response->headers->set('Content-Type', 'text/html');
$response->send();