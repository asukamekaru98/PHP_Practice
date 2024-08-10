<?php
$data = [];
$data[] = ["name" => "井上真美", "age" => 37, "phone" => "090-4321-9999"];
$data[] = ["name" => "坂田京子", "age" => 32, "phone" => "06-3434-7788"];
$data[] = ["name" => "石岡　稔", "age" => 29, "phone" => "0467-89-9191"];
$data[] = ["name" => "多田優美", "age" => 35, "phone" => "59-1212"];
$pattern = "/(-)\d{4}$/";
$replacement = "$1****";

foreach ($data as $user) {
    $result = preg_replace($pattern, $replacement, $user);
    foreach ($result as $key => $value) {
        echo "{$key}:", $value, "<br>";
    }
}
