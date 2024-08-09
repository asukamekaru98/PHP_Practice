<?php
$pattern = "/(090|080|070)(-?\d{4}){2}/u";
var_dump(preg_match($pattern, "090-1234-5678"));
var_dump(preg_match($pattern, "080-1234-5678"));
var_dump(preg_match($pattern, "07012345678"));
var_dump(preg_match($pattern, "12345678"));
