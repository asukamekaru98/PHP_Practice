<?php
$pattern = "/^山/u";
var_dump(preg_match($pattern, "山田建設"));
var_dump(preg_match($pattern, "山本整骨院"));
var_dump(preg_match($pattern, "大山観光"));
var_dump(preg_match($pattern, "藤田商店、山崎商店"));
