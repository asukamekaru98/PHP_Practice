<?php
function compare($a, $b)
{
    if ($a < $b) {
        echo "{$a}、{$b}の順<br>";
    } else if ($a == $b) {
        echo "{$a}、{$b}は同じ<br>";
    } else if ($a > $b) {
        echo "{$b}、{$a}の順<br>";
    }
}

compare("120", 99);
compare("A5", 0);

$num = 99;
compare("A5", (string)$num);
