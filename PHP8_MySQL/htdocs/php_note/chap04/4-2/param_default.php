<?php
function charge($rank, $days = 1)
{
    switch ($rank) {
        case "A":
            $ryokin = 15000 * $days;
            break;
        case "B":
            $ryokin = 12000 * $days;
            break;
        default:
            $ryokin = 8000 * $days;
            break;
    }
    return $ryokin;
}

echo charge("A", 5) . "<br>";
echo charge("B",) . "<br>";
echo charge("C", 2) . "<br>";
