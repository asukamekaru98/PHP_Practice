<?php
function exchangeList($value, $key, $rateData)
{
    $rate = $rateData["rate"];
    if ($rate == 0) {
        return;
    }

    $price = $value / $rate;
    $exPrice = sprintf('%.02f', $price);
    echo "<li>", $rateData["symbol"], $exPrice, "</li>";
}

$priceList = [2300, 1200, 4000];
$dollaryne = ["symbol" => '$', "rate" => 112.50];

echo "<ul>";
array_walk($priceList, "exchangeList", $dollaryne);
echo "</ul>";
