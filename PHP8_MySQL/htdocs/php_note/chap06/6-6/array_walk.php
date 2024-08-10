<?php
function exchangeList(&$value, $key, $rateData)
{
    $rate = $rateData["rate"];
    if ($rate == 0) {
        return;
    }

    $value = $value / $rate;
    $value = round($value, 2);
}

$priceList = [2300, 1200, 4000];
$dollaryne = ["symbol" => '$', "rate" => 112.50];

array_walk($priceList, "exchangeList", $dollaryne);
print_r($priceList);
