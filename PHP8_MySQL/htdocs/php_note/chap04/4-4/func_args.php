<?php
function myFunc()
{
    $allArgs = func_get_args();
    $total = array_sum($allArgs);
    $numArgs = func_num_args();

    if ($numArgs > 0) {
        $average = $total / $numArgs;
        $lastValue = func_get_arg($numArgs - 1);
    } else {
        $lastValue = $average = $total = "(データ無し)";
    }
    echo "合計点:{$total}", PHP_EOL;
    echo "平均点:{$average}", PHP_EOL;
    echo "最後の点数:{$lastValue}", PHP_EOL;
}

myFunc(43, 67, 55, 75);
echo "<br>";
myFunc();
