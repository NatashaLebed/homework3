homework3
=========

MVC

* froncontroller - src/natasha/index.php 
* actions in src/natasha/controllers.php 
* models - src/natasha/model.php
* views - src/natasha/templates/
-------------------------------------
OOP - Countries

Abstract class - AbstractCountries

inharitance classes Ukraine, Russia, Estonia

they have properties 
  * population 
  * area 
  * president and abstract method About

Interfaces 
  * EuropeanUnionInterface(страны ЕС) - наследует Estonia, 
  * ExUssrCountriesInterface(страны бывшего СССР) - наследуют Ukraine, Russia, Estonia 
  * GroupOfEightInterface(большая восьмерка) - наследует Russia

Инкапсуляция реализована скрытым методом Corruption, который вызывается при setPresident в Ukraine
twig
