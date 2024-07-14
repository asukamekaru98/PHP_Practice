<?php
$yomi1 = "ｽｺｯﾄ・ﾗﾌｧﾛ";
$yomi2 = "チャーリー・ミンガス";
$hiragana1 = mb_convert_kana($yomi1, "HcV");
$hiragana2 = mb_convert_kana($yomi2, "HcV");

echo $hiragana1, "<br>";
echo $hiragana2, "<br>";
