<?php
function holiday($yubi)
{
    if (($yubi == "土曜日") || ($yubi == "日曜日")) {
        echo $yubi, "はお休みです<br>";
    } else {
        echo $yubi, "はお休みじゃない<br>";
    }
}

holiday("金曜日");
holiday("土曜日");
holiday("日曜日");
