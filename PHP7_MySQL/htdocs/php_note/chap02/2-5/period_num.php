<?php
$num = 19 + 1;
$msg1 = $num . "版" . PHP_EOL;
$msg2 = $num . 77;
echo $msg1; //20版
echo $msg2; //2077

$msg2++;
echo $msg2; //2078 増える。

?>