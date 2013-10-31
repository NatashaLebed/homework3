<?php

namespace Natasha\Countries;

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
