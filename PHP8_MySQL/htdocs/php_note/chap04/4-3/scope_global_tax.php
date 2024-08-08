<?php
$tax = .1;

function taxPrice($tanka, $kosu)
{
    global $tax;
    $ryokin = $tanka  * $kosu * (1 + $tax);
    echo $ryokin, "円<br>";
}

taxPrice(tanka: 250, kosu: 4);
echo $tax * 100, "%";
