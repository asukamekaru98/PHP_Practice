<?php
function countUp()
{
    static $cnt = 0;
    $cnt++;
    return $cnt;
}

for ($i = 1; $i <= 10; $i++) {

    echo countUp(), "回目。<br>";
}
