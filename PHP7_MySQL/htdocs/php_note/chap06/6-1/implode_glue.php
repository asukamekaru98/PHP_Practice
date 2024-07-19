<?php
$data = ["赤井一郎", "伊藤五郎", "上野信二"];
$glue = "さん、";
$nameList = implode($glue, $data);
$nameList .= "さん";
print_r($nameList);
