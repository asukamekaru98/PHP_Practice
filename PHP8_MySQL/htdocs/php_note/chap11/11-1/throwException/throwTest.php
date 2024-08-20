<?php

function makeValue(int $num): int
{
    if ($num <= 0 or $num > 10) {
        throw new Exception("制限値外エラー");
    }
    return $num * 5;
}
try {
    $v1 = makeValue(8);
    echo "結果1:{$v1}<br>";
    $v2 = makeValue(123);
    echo "結果2:{$v2}<br>";
    $v3 = makeValue(7);
    echo "結果2:{$v3}<br>";
} catch (Exception $e) {
    $err = $e->getMessage();
    exit($err);
}
