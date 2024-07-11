<?php
function warikan($total,$ninzu){
    if($ninzu <= 0){
        return; //これがないと、$resultでINFが出力される
    }

    $result = $total / $ninzu;
    echo "{$total}円を{$ninzu}人で分けると{$result}円。";
    echo "<br>".PHP_EOL;
}

warikan(2500,2);
warikan(3000,0);
warikan(5500,4);