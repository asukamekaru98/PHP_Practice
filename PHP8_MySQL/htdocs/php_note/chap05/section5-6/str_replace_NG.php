<?php
$search = ["XG", "P10"];
$replace = ["XP", "P10a"];

$subject = "XG90,XG100,P10,P15";
$result = str_replace($search, $replace, $subject);

echo "置換前：{$subject}", "<br>";
echo "置換後：{$result}", "<br>";
