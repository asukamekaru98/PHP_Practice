<?php
$yomi = "ふじのさぶろう";
$hankaku_katakana = mb_convert_kana($yomi, "h");
$zenkaku_katakana = mb_convert_kana($yomi, "C");

echo $hankaku_katakana, "<br>";
echo $zenkaku_katakana, "<br>";
