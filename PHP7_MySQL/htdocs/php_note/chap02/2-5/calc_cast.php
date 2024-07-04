<?php
$ninzu = "3人" + "2人";
$price = "500円" * $ninzu;
$price = $price * "1.08 消費税";
echo "料金{$price}円、{$ninzu}人";
?>