<?php
$filepath = "/goods/image/cat/";
var_dump(preg_match("/\/image\//u", $filepath));
var_dump(preg_match("#/image/#u", $filepath));
