<?php

namespace Natasha;

use Natasha\Countries\Ukraine;
use Natasha\Countries\Estonia;

class Model
{
    public function getUkraineParam()
    {
        $myUkraine = new Ukraine('38 mln','603 000 km','Good President');
        $ua['about'] = $myUkraine->about();
        $ua['exUssrCountries'] = $myUkraine->exUssrCountries();

        return $ua;
    }

    public function getEstoniaParam()
    {
        $myEstonia = new Estonia('1,2 mln','45 000 km','Tomas Hendrik');
        $ee['about'] = $myEstonia->about();
        $ee['europeanUnion'] = $myEstonia->europeanUnion();
        $ee['exUssrCountries'] = $myEstonia->exUssrCountries();

        return $ee;
    } 
}

