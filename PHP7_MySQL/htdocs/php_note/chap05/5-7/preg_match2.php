<?php
$result1 = preg_match("/4.-49/u", "確か49-46でした");
$result2 = preg_match("/4.-49/u", "確か46-49でした");
$result3 = preg_match("/4.-49/u", "41-49かな？");

var_dump($result1);
var_dump($result2);
var_dump($result3);
