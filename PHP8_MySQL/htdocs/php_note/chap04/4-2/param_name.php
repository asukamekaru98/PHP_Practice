<?php
function fee($adult = 0, $child = 0)
{
    $adult_fee = 1000 * $adult;
    $child_fee = 600 * $child;
    $fee = $adult_fee + $child_fee;
    return $fee;
}

$total = fee(1, 2);
echo "{$total}" . "<br>";


$total = fee(child: 2, adult: 1);
echo "{$total}" . "<br>";


$total = fee(child: 1);
echo "{$total}" . "<br>";
