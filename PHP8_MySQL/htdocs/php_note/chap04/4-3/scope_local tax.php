<?php
$tax = .1;

function taxPrice($tanka, $kosu)
{
    $ryokin = 250  * $kosu * (1 /*- $tax*/);
    echo $ryokin, "<br>";
}

taxPrice(tanka: 250, kosu: 4);
echo $tax * 100;
