<?php
function exchange($value)
{
    global $rate;
    if ($rate == 0) {
        $rate = 1;
    }
    $exPrice = $value / $rate;
    return round($exPrice, 2);
}

$priceYen = [2300, 1200, 4000];
$rate = 112.50;
$priceDollar = array_map("exchange", $priceYen);
print_r($priceDollar);
