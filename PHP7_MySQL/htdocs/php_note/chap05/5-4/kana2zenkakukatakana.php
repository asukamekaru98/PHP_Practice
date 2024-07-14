<?php
$yomi1 = "ｽｺｯﾄ・ﾗﾌｧﾛ";
$yomi2 = "あしがらきんたろう";
$hiragana1 = mb_convert_kana($yomi1, "KCV");
$hiragana2 = mb_convert_kana($yomi2, "KCV");

echo $hiragana1, "<br>";
echo $hiragana2, "<br>";
