<?php

namespace natasha;

require_once '../../vendor/autoload.php';


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use natasha\Perambulator\SummerPerambulator;
use natasha\Perambulator\TransformerPerambulator;

$mySummer = new SummerPerambulator('Chikko','7','3');
$summerTitle = $mySummer->priceTitle();
$summerFold = $mySummer->fold();
/*echo $summerTitle.'<br>';
echo 'Fold - '. $mySummer->fold() .'<br><br>';*/

$myTransformer = new TransformerPerambulator('GoodBaby','15','4');
$transformerTitle = $myTransformer->priceTitle();
$transformerFold = $myTransformer->fold();
$transformerProtectCold = $myTransformer->protectCold();
$transformerReversibleHandle = $myTransformer->reversibleHandle();

/*echo $transformerTitle.'<br>';
echo 'Fold - '. $myTransformer->fold().'<br>';
echo 'ProtectCold - '. $myTransformer->protectCold().'<br>';
echo 'ReversibleHandle - '. $myTransformer->reversibleHandle().'<br>';


echo '<br>';
echo '<br>';
echo '<br>';*/


/*$response = new Response();
$response->setContent($myTransformer->priceTitle());
$response->setStatusCode(200);
$response->headers->set('Content-Type', 'text/html');
$response->send();*/

require 'templates/ukraineView.php';