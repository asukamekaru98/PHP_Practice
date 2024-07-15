<?php
function compareStr($a, $b)
{
    $result = strcmp($a, $b);
    if ($result < 0) {
        echo "{$a}、{$b}の順<br>";
    } else if ($result == 0) {
        echo "{$a}、{$b}は同じ<br>";
    } else if ($result > 0) {
        echo "{$b}、{$a}の順<br>";
    }
}

compareStr("123", 99);
compareStr("A123", 99);
compareStr("009", 99);
