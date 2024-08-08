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

$kingaku1 = price(2400, 2);
$kingaku2 = price(1200, 5);

echo "金額1{$kingaku1}" . "<br>" . PHP_EOL;
echo "金額2{$kingaku2}" . "<br>" . PHP_EOL;
