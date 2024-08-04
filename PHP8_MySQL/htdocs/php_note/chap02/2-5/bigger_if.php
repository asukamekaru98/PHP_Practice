<?php
$a = mt_rand(0, 50);
$b = mt_rand(0, 50);
if ($a > $b) {
    $bigger = $a;
} else {
    $bigger = $b;
}

echo "{$bigger},a={$a},b={$b}";
