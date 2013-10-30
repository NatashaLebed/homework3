<?php

namespace natasha;

use Symfony\Component\HttpFoundation\Response;

require 'model.php';

function countriesAction()
{
    $summer = getSummerParam();
    $transformer = getTransformerParam();

    ob_start();
    require 'templates/view.php';
    $html = ob_get_clean();

    $response = new Response($html);

    return $response;
}

function ukraineAction()
{
    $transformer = getTransformerParam();

    ob_start();
    require 'templates/ukraineView.php';
    $html = ob_get_clean();

    $response = new Response($html);

    return $response;
}