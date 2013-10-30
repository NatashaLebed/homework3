<?php

namespace natasha\Countries;

/*Класс Летняя_коляска наследует все методы абстрактного класса Коляска*/
/*Реализует метод Текст_для_прайса*/

/*Имеет дополнительную фичу Складывание(интерфейс)*/


class Ukraine extends AbstractCountries implements ExUssrCountriesInterface
{
    public function __construct($population, $area, $headOfState)
    {
        $this->setPopulation($population);
        $this->setArea($area);
        $this->setHeadOfState($headOfState);
    }

    public function about()
    {
        return ("Ukraine - {$this->getPopulation()}, {$this->getArea()}, {$this->getHeadOfState()}");
    }

    public function exUssrCountries()
    {
        return 'was a member of USSR ';
    }

}
