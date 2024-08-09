<?php
$search = ["鈴木", "35歳"];
$replace = ["A", "x歳"];

$subject = "担当は鈴木さんです。鈴木さんは35歳の男性です。";
$result = str_replace($search, $replace, $subject);

echo "置換前：{$subject}", "<br>";
echo "置換後：{$result}", "<br>";
