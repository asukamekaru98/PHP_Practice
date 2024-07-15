<?php
function check($target)
{
    $result = mb_substr_count($target, "不可");

    if ($result >= 3) {
        echo "不可が{$result}個あるので、再試験です<br>";
    } else {
        echo "合格です<br>";
    }
}

check("優、不可、良、可、優、可");
check("可、優、不可、不可、良、不可");
check("不可、可、不可、不可、良、不可");
check("可、良、良、不可、良、不可");
