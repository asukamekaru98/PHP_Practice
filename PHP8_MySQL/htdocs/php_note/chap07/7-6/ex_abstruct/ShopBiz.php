<?php
abstract class ShopBiz
{
    abstract function thanks();

    protected $uriage = 0;
    protected function sell(int $price = 0)
    {
        echo "{$price}円です。";
        $this->uriage += $price;
        $this->thanks();
    }
}
