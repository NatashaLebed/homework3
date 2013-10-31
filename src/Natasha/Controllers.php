<?php

namespace Natasha;

use Natasha\Model;
use Symfony\Component\HttpFoundation\Response;

class Controllers
{
    public function countriesAction()
    {

        $ua = Model::getUkraineParam();
        $ee = Model::getEstoniaParam();

        ob_start();
        require 'templates/view.php';
        $html = ob_get_clean();

        $response = new Response($html);

        return $response;
    }

    public function ukraineAction()
    {
        $ua = Model::getUkraineParam();
        ob_start();
        require 'templates/ukraineView.php';
        $html = ob_get_clean();

        $response = new Response($html);

        return $response;
    }

    public function estoniaAction()
    {
        $ee = Model::getEstoniaParam();

        ob_start();
        require 'templates/estoniaView.php';
        $html = ob_get_clean();

        $response = new Response($html);

        return $response;
    }
}
