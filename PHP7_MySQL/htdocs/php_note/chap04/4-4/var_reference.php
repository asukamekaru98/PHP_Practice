<?php
function oneUp(&$var) //
{
    $var += 1;
}

$num = 5;
oneUp($num);    //参照渡し
echo $num;
