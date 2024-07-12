<?php
function myFunc()
{
    $allArgs = func_get_args();     // PHPで関数内のすべての引数を配列として取得するための関数
    $total = array_sum($allArgs);   // 配列内のすべての値の合計を計算するための関数
    $numArgs = func_num_args();     // 引数の数を返す関数

    if ($numArgs > 0) {
        $average = $total / $numArgs;
        $lastValue = func_get_arg($numArgs - 1);
    } else {
        $lastValue = $average = $total = "(データなし)";
    }

    echo "合計点", $total, "\n";
    echo "平均点", $average, "\n";
    echo "最後の点数", $lastValue, "\n";
}

myFunc(43, 67, 55, 75);
