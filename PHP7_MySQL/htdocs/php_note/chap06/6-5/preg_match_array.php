<?php
$nameList = ["田中達也", "川崎賢一", "山田一郎", "杉山直樹"];
$pattern = "/田/";
$result = preg_grep($pattern, $nameList);
echo "該当" . count($result) . "件<br>";
foreach ($result as $value) {
    echo $value, "<br>";
}
