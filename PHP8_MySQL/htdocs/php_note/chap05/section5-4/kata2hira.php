<?php
$yomi = "ｽｺｯﾄ･ﾗﾌｧﾛ";
$hankaku_katakana = mb_convert_kana($yomi, "HcV");

$yomi = "チャーリー・ブラウン";
$zenkaku_katakana = mb_convert_kana($yomi, "HcV");

echo $hankaku_katakana, "<br>";
echo $zenkaku_katakana, "<br>";
