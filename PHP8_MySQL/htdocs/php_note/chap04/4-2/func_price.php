<?php
function price($tanka, $kosu)
{
    $souryo = 250;
    $ryokin = $tanka * $kosu;
    if ($ryokin < 5000) {
        $ryokin += $souryo;
    }
    return $ryokin;
}

echo price(2000, 1), "<br>";
echo price(2000, 3), "<br>";
echo price(6000, 3), "<br>";
