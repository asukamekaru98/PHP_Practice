<?php
do {

    $a = mt_rand(1, 13);
    $b = mt_rand(1, 13);
    $c = mt_rand(1, 13);
    $abc = $a + $b + $c;
    echo "{$a}+{$b}+{$c}={$abc}<br>";
    if ($abc == 21) {
        break;
    }
} while (TRUE);

echo "合計21になる数字{$a}、{$b}、{$c}";
