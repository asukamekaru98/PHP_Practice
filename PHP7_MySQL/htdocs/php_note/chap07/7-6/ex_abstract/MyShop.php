<?php
require_once("ShipBiz.php");

class MyShop7_6 extends ShopBiz
{
    public function thanks()
    {
        echo "ありがとうございました", "<br>";
    }

    public function hanabi($tanka, $kosu)
    {
        $price = $tanka * $kosu;
        $this->sell($price);
    }

    public function getUriage()
    {
        echo "売上合計は{$this->uriage}円です。";
    }
}
