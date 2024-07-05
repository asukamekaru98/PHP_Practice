<?php
$sex = "woman";
$age = 34;
if($sex == "woman"){
    if(($age >= 30) && ($age < 40)){
        echo "採用です";
    }else{
        echo "30代の方を募集しています。";
    }
}else{
    echo "女性のみの応募です。";
}