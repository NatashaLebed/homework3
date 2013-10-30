<?php

use natasha\Countries\Ukraine;
use natasha\Countries\Estonia;

function getUkraineParam()
{
    $myUkraine = new Ukraine('38 mln','603 000 km','ProFFesor');
    $ua['about'] = $myUkraine->about();
    $ua['exUssrCountries'] = $myUkraine->exUssrCountries();

    return $ua;
}

function getEstoniaParam()
{
    $myEstonia = new Estonia('1,2 mln','45 000 km','Tomas Hendrik');
    echo 'qqqqqqqqqqq';
    $ee['about'] = $myEstonia->about();
    $ee['europeanUnion'] = $myEstonia->europeanUnion();
    $ee['exUssrCountries'] = $myEstonia->exUssrCountries();
    $ee['reversibleHandle'] = $myEstonia->reversibleHandle();

    return $ee;
}
