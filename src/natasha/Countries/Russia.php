<?php

namespace natasha\Countries;

class Russia extends AbstractCountries implements GroupOfEightInterface, ExUssrCountriesInterface
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

    public function groupOfEight()
    {
        return 'is a member of GroupOfEight ';
    }

    public function exUssrCountries()
    {
        return 'was a member of USSR ';
    }


}
