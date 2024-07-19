<?php
$goods = [
    "id" => "R56",
    "size" => "M",
    "price" => 2340
];

$goods['price'] = 3500;

echo "id：" . $goods['id'] . "<br>";
echo "サイズ：" . $goods['size'] .  "<br>";
echo "価格：" . number_format($goods['price'])  .  "円<br>";
