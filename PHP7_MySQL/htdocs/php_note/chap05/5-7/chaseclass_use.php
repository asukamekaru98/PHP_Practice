<?php
$pattern = "/[赤青緑]の球/u";
var_dump(preg_match($pattern, "それは赤の球です。"));
var_dump(preg_match($pattern, "青の球が2個です。"));
var_dump(preg_match($pattern, "緑の球です。"));
var_dump(preg_match($pattern, "緑の箱です。"));
var_dump(preg_match($pattern, "靑の球です。")); //旧字体は別の文字として認識される
