<?php
$pattern = "/赤の球/u";
var_dump(preg_match($pattern, "赤の球です。"));
var_dump(preg_match($pattern, "靑の球です。"));
var_dump(preg_match($pattern, "赤の箱です。"));
