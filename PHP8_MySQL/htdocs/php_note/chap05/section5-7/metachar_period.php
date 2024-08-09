<?php
$pattern = "/田中..子/u";
var_dump(preg_match($pattern, "田中佐知子"));
var_dump(preg_match($pattern, "田中亜希子"));
var_dump(preg_match($pattern, "田中幸子"));
var_dump(preg_match($pattern, "田中向日葵子"));
