<?php
function check($target, $str)
{
    $result = mb_strpos($target, $str);
    if ($result === false) {
        echo "「{$str}」は「{$target}」に含まれてない";
    } else {
        echo "「{$str}」は「{$target}」の{$result}文字目に含まれてん";
    }
}

check("東京都渋谷区神南", "渋谷");
echo "<br>";
check("東京都渋谷区神南", "新宿");
echo "<br>";
check("PHP,Swift,C++", "PHP");
echo "<br>";
check("PHP,Swift,C++", "Python");
