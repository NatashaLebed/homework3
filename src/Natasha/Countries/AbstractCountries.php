<?php

namespace Natasha\Countries;

abstract class AbstractCountries
{
    public $population;
    public $area;
    public $president;

    abstract public function about();

    /*================Set Values==================*/

    public function setPopulation($population)
    {
        $this->population = $population;
    }

    public function setArea($area)
    {
        $this->area = $area;
    }

    public function setPresident($president)
    {
        $this->president = $president;
    }

    /*================Get Values===================*/

    public function getPopulation()
    {
        return $this->population;
    }

    public function getArea()
    {
       return $this->area;
    }

    public function getPresident()
    {
        return $this->president;
    }


}
