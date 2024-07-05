<?php
$a = mt_rand(0,50);
$b = mt_rand(0,50);
$bigger = ($a>$b)?$a:$b;
echo "大きな値は{$bigger}、\$aは{$a}、\$bは{$b}";

//三項演算子（さんこうえんざんし）