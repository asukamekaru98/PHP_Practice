<?php
$pattern = "/201[2-5](AX|FX)/i";
$subjects = "2011AX,2012Fx,2012AF,2013FX,2015ax,2016Fx";
$result = preg_match_all($pattern, $subjects, $matches);

if ($result === false) {
    echo "エラー", preg_last_error();
} elseif ($result == 0) {
    echo "マッチした型式はありません。";
} else {
    echo "{$result}個マッチしました。<br>";
    echo implode("、", $matches[0]);
}
