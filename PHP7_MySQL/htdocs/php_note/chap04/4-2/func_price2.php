<?php
function price($tanaka, $kosu){
    $souryo = 250;
    $ryokin = $tanaka * $kosu;

    //5000円未満の送料は250円
    if($ryokin < 5000){
        $ryokin += $souryo;
    }
    return $ryokin;
}

$kingaku1 = price(2400,2);
$kingaku2 = price(1200,5);
echo "金額1は{$kingaku1}円" . "<br>".PHP_EOL;
echo "金額2は{$kingaku2}円" . "<br>".PHP_EOL;

$kingaku3 = price(5000,1);
$kingaku4 = price(5100,1);

echo "金額3は{$kingaku3}円" . "<br>".PHP_EOL;
echo "金額4は{$kingaku4}円";
?>