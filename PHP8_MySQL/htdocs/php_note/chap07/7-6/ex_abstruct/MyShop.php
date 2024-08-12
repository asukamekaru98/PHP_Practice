<?php
require_once("ShopBiz.php");

class MyShop76 extends ShopBiz
{
    public function thanks()
    {
        echo "ありがとうございました", "<br>";
    }

    public function hanabi(int $tanka, int $kosu)
    {
        $this->sell($tanka * $kosu);
    }

    public function getUriage()
    {
        echo "売上合計は、{$this->uriage}円です。";
    }
}
