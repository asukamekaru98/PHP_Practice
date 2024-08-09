<?php
$result1 = preg_match("/46-49/u", "確か49-46でした");
$result2 = preg_match("/46-49/u", "たぶん46-49だった");
$result3 = preg_match("/46-49u", "46-49かな");  //間違い

var_dump($result1);
var_dump($result2);
var_dump($result3);
