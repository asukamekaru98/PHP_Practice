<?php
$checkID = ["a21", "d21", "d33", "e53"];
$aList = ["a12", "b15", "d21"];
$bList = ["d13", "e53", "f10", "k12"];

$diffID = array_diff($checkID, $aList, $bList);
foreach ($diffID as $value) {
    echo "{$value}は新規です。<br>";
}
