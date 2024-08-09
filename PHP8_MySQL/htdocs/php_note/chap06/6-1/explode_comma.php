<?php
$data = "赤井一郎,伊藤五郎,上野信二";
$delimiter = ",";
$nameList = explode($delimiter, $data);
print_r($nameList);
