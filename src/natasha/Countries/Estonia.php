<?php

namespace natasha\Countries;

/*Класс Трансформер_коляска наследует все методы абстрактного класса Коляска*/
/*Реализует метод Текст_для_прайса*/

/*Имеет дополнительную фичу Складывание, Защита_от_Холода, Перекидная_ручка (интерфейсы)*/

class Estonia extends AbstractCountries implements EuropeanUnion, ExUssrCountriesInterface, ReversibleHandleInterface
{
    public function __construct($population, $area, $headOfState)
    {echo 'qqqqqqqqqqq';
        $this->setPopulation($population);
        $this->setArea($area);
        $this->setHeadOfState($headOfState);
        echo 'qqqqqqqqqqq';
    }


    public function about()
    {
        return ("Estonia - {$this->getPopulation()}, {$this->getArea()}, {$this->getHeadOfState()}");
    }

    public function europeanUnion()
    {
       return 'is a member of EuropeanUnion';
    }

    public function exUssrCountries()
    {
        return 'was a member of USSR ';
    }

    public function reversibleHandle()
    {
        return 'Можно перкинуть ручку';
    }


}
