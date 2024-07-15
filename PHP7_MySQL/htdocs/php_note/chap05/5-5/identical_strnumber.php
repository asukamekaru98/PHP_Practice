<?php
function check($a, $b)
{
    if ($a === $b) {
        echo "{$a}と{$b}は、", "同じ<br>";
    } else {
        echo "{$a}と{$b}は、", "違う<br>";
    }
}

check("7cm", "7cm");
check("7km", "7cm");
check("7人", 7);
check("PHP7", "7");
check("七", 0);
