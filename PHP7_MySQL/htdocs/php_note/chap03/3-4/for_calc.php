<?php
$price = 0;

for($kazu = 1;$kazu <= 6; $kazu++){
    if($kazu <= 3){
        $price += 1000;
    }else{
        $price += 500;
    }
    echo "{$kazu}人+{$price}円。";
}
