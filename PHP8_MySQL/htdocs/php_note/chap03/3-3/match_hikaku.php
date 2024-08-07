<?php
$num = "99";

switch ($num) {
    case 1:
        $result_switch = "普通";
        break;
    case 99:
        $result_switch = "あたり";
        break;
    default:
        $result_switch = "該当なし";
        break;
}

echo "switchの判定 {$result_switch}<br>";


$result_switch = match ($num) {
    1 => "普通",
    99 => "あたり",
    default => "該当なし",
};

echo "matchの判定 {$result_switch}<br>";
