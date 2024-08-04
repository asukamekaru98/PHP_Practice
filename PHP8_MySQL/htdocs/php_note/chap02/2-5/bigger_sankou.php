<?php
$a = mt_rand(0, 50);
$b = mt_rand(0, 50);
$bigger = ($a > $b) ? $a : $b;
echo "{$bigger},a={$a},b={$b}";
