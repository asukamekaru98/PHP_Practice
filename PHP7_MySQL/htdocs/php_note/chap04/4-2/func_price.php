<?php
function pritce($tanaka, $kosu){
    $souryo = 250;
    $ryokin = $tanaka * $kosu;

    //5000円未満の送料は250円
    if($ryokin < 5000){
        $ryoukin += $souryou;
    }
    return $ryokin;
}
?>