<?php
$nameList = ["田中達也", "Sam Jones", "新井貴子"];
function nameCheck($name)
{
    global $nameList;
    if (in_array($name, $nameList)) {
        echo "メンバーです。";
    } else {
        echo "メンバーじゃない";
    }
}

echo nameCheck("田中達也"), "<br>";
echo nameCheck("新井"), "<br>";
echo nameCheck("Sam Jones"), "<br>";
echo nameCheck("SAM JONES"), "<br>";
