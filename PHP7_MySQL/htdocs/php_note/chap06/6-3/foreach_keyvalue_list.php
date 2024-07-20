<?php
$data = ["ID" => "TR123", "商品名" => "ピークハント", "価格" => 14500];
echo "<ul>", "<br>";

foreach ($data as $key => $value) {
    echo "<li>", $key, ": ", $value, "</li><br>";
}

echo "</ul><br>";
