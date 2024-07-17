<?php
$pattern = "/[a-z]{4,8}/u";

var_dump(preg_match($pattern, "cycling"));
var_dump(preg_match($pattern, "marathon"));
var_dump(preg_match($pattern, "run"));
var_dump(preg_match($pattern, "SURF"));
var_dump(preg_match($pattern, "123456"));
