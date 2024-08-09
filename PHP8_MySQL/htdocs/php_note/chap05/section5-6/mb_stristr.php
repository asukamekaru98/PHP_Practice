<?php
function pickout($target, $str)
{
    $result = mb_stristr($target, $str);
    if ($result === false) {
        echo "(not fount)<br>";
    } else {
        echo "{$result}<br>";
    }
}

pickout("東京都港区赤坂2-3-4", "赤坂");
pickout("東京都渋谷区神南1-1-1", "渋谷区");
pickout("東京都渋谷区道玄坂", "原宿");
