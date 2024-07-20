<?php
$data = ["NV15", "ST", "MD500GB"];
$search = ["NV", "ST", "MD"];
$replacement = ["New Vision", "スリムタワー", "マルチドライブ"];
$result = str_replace($search, $replacement, $data);
echo "商品データ:\n";
echo $result[0], "、", $result[1], "、", $result[2];
