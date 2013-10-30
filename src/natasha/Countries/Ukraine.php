<?php

namespace natasha\Countries;

/*Класс Летняя_коляска наследует все методы абстрактного класса Коляска*/
/*Реализует метод Текст_для_прайса*/

/*Имеет дополнительную фичу Складывание(интерфейс)*/


class Ukraine extends AbstractCountries implements ExUssrCountriesInterface
{
    public function setPresident($president)
    {
        $president = $this->corruption();
        $this->president = $president;
    }

// =============инкапсуляция================================

    private function corruption()
    {
       return 'Proffesor';
    }

    public function __construct($population, $area, $president)
    {
        $this->setPopulation($population);
        $this->setArea($area);
        $this->setPresident($president);
    }

    public function about()
    {
        return ("Ukraine - {$this->getPopulation()}, {$this->getArea()}, {$this->getPresident()}");
    }

    public function exUssrCountries()
    {
        return 'was a member of USSR ';
    }

    /*private function corruption()
    {
        echo 'Change wrong president';
    }*/

}
