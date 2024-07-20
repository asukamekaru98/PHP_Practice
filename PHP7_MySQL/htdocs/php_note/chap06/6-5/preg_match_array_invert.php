<?php
$data = ["R5", "E2", "E6", "A8", "R1", "G8"];
$patter = "/['A'|'R']/";
$result = preg_grep($patter, $data, PREG_GREP_INVERT);
echo "該当しない" . count($result) . "件<br>";

$resultString = implode("<br>", $result);
echo $resultString;
