<?php
$pattern = "/[A-F][1-9]/u";
var_dump(preg_match($pattern, "B8"));
var_dump(preg_match($pattern, "G7"));
var_dump(preg_match($pattern, "D6"));
var_dump(preg_match($pattern, "a2"));
var_dump(preg_match($pattern, "1A"));
