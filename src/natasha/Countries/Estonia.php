<?php

namespace natasha\Countries;

/*Класс Трансформер_коляска наследует все методы абстрактного класса Коляска*/
/*Реализует метод Текст_для_прайса*/

/*Имеет дополнительную фичу Складывание, Защита_от_Холода, Перекидная_ручка (интерфейсы)*/

class Estonia extends AbstractCountries implements EuropeanUnionInterface, ExUssrCountriesInterface
{
    public function __construct($population, $area, $president)
    {   $this->setPopulation($population);
        $this->setArea($area);
        $this->setPresident($president);
    }


    public function about()
    {
        return ("Estonia - {$this->getPopulation()}, {$this->getArea()}, {$this->getPresident()}");
    }

    public function europeanUnion()
    {
       return 'is a member of EuropeanUnion';
    }

    public function exUssrCountries()
    {
        return 'was a member of USSR ';
    }


}
