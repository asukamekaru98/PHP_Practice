<?php
$valueList = [5, -3, 12, 6, 9];
$sum = 0;

foreach ($valueList as $value) {
    if ($value > 0) {
        $sum += $value;
    }
}

echo "正の値の合計は{$sum}です。";
