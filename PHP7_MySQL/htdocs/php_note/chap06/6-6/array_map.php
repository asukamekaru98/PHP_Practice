<?php
function exchange($value)
{
    global $rate;
    if ($rate == 0) {
        $rate = 1;
    }
    $exPrice = $value / $rate;
    $exPrice = round($exPrice * 100) / 100;
    return $exPrice;
}

$priceYen = [2300, 1200, 4000];
$rate = 112.50;
$priceDollar = array_map("exchange", $priceYen);
print_r($priceDollar);
