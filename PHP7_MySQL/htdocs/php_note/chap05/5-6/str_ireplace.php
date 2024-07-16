<?php
$subject = "Apple Pie";
$result = str_ireplace("p", "?", $subject, $count);
echo "置換前：{$subject}", "<br>";
echo "置換後：{$result}", "<br>";
echo "個数：{$count}", "<br>";
