<?php

namespace natasha;

use Symfony\Component\HttpFoundation\Response;

require 'model.php';

function countriesAction()
{
    $ua = getUkraineParam();
    $ee = getEstoniaParam();

    ob_start();
    require 'templates/view.php';
    $html = ob_get_clean();

    $response = new Response($html);

    return $response;
}

function ukraineAction()
{
    $ua = getUkraineParam();
    ob_start();
    require 'templates/ukraineView.php';
    $html = ob_get_clean();

    $response = new Response($html);

    return $response;
}

function estoniaAction()
{
    $ee = getEstoniaParam();

    ob_start();
    require 'templates/estoniaView.php';
    $html = ob_get_clean();

    $response = new Response($html);

    return $response;
}