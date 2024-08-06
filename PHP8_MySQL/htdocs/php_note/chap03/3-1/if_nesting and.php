<?php
$sex = "woman";
$age = 34;

if ($sex == "woman") {
    if (($age >= 30) && ($age < 40)) {
        echo "採用";
    } else {
        echo "30代だけ";
    }
} else {
    echo "女性のみ";
}
