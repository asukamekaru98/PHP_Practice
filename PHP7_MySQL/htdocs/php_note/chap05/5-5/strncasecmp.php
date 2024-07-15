<?php
function check($str2)
{
    $str1 = "ABC";
    $result = strncasecmp($str1, $str2, strlen($str1));
    echo "{$str2}は、";
    if ($result == 0) {
        echo "{$str1}から始まる<br>";
    } else {
        echo "その他<br>";
    }
}

$id1 = "ABCR70";
$id2 = "xbcM65";
$id3 = "AbcW71";
$id4 = "xABC68";
check($id1);
check($id2);
check($id3);
check($id4);
