<?php

namespace Natasha\Countries;

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


}
