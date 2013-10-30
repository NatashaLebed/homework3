<?php

/*Абстрактный класс Коляска с общим для всех весом, брендом, количеством колес. Все коляски умеют ехать и останавливаться. */
/* Имеет абстрактный метод Текст_для_прайса , для разных колясок дописывается разный префикс*/

namespace natasha\Countries;

abstract class AbstractCountries
{
    public $population;
    public $area;
    public $headOfState;

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

    public function setHeadOfState($headOfState)
    {
        $this->headOfState = $headOfState;
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

    public function getHeadOfState()
    {
        return $this->headOfState;
    }

    public function go()
    {
        return 'Go!';
    }

    public function stop()
    {
        return 'Stop!';
    }

}