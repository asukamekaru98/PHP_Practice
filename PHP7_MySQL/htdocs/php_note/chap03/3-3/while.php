<?php

$numArray = array();
while(count($numArray) < 5){

    //乱数取得
    $num = mt_rand(1,30);

    echo $num." ";

    // 乱数の値がnumArrayに含まれているか調べる
    if(!in_array($num,$numArray)){

        //numArrayに追加する
        array_push($numArray,$num);
    }
}


print_r($numArray);
?>