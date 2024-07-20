<?php
$nameList = ["m01" => "田中達也", "m02" => "佐々木真一", "w01" => "新井貴子", "w02" => "笹井香"];
$ageList = ["m01" => 34, "m02" => 42, "w01" => 28, "w02" => 41];
function getAge($name)
{
    global $nameList;
    global $ageList;
    $key = array_search($name, $nameList);

    if ($key !== false) {
        $age = $ageList[$key];
        echo "{$name}さんは{$age}歳です。";
    } else {
        echo "「{$name}」はメンバーではない。";
    }
}

echo getAge("新井貴子"), "<br>";
echo getAge("田中達也"), "<br>";
echo getAge("林　純一"), "<br>";
echo getAge("佐々木真一"), "<br>";
