<?php
$pattern = "/^山..子$/u";

var_dump(preg_match($pattern, "山田朋子"));
var_dump(preg_match($pattern, "山本あさ子"));
var_dump(preg_match($pattern, "山崎清美"));
var_dump(preg_match($pattern, "藤田商店、山崎商店"));
