<?php

use natasha\Perambulator\SummerPerambulator;
use natasha\Perambulator\TransformerPerambulator;

function getSummerParam()
{
    $mySummer = new SummerPerambulator('Chikko','7','3');
    $summer['title'] = $mySummer->priceTitle();
    $summer['fold'] = $mySummer->fold();
    return $summer;
}

function getTransformerParam()
{
    $myTransformer = new TransformerPerambulator('GoodBaby','15','4');
    $transformer['title'] = $myTransformer->priceTitle();
    $transformer['fold'] = $myTransformer->fold();
    $transformer['protectCold'] = $myTransformer->protectCold();
    $transformer['reversibleHandle'] = $myTransformer->reversibleHandle();
    return $transformer;
}