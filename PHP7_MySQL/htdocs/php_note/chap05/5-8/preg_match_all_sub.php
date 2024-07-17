<?php
$pattern = "/2013([A-F])-(..)/";
$subjects = "2012A-sx,2013F-fx,2013G-fx,2013A-dx,2015a-sx";
$result = preg_match_all($pattern, $subjects, $matches);

if ($result === false) {
    echo "エラー", preg_last_error();
} elseif ($result == 0) {
    echo "マッチした型式はありません。";
} else {
    $all = implode("、", $matches[0]);
    $model = implode("、", $matches[1]);
    $type = implode("、", $matches[2]);

    echo "見つかった型式：{$all}", "<br>";
    echo "モデル：{$model}", "<br>";
    echo "タイプ：{$type}", "<br>";
}
