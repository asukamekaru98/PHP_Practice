<?php
abstract class ShopBiz
{
    abstract function thanks();

    protected $uriage = 0;
    protected function sell($price)
    {
        if (is_numeric($price)) {
            echo "{$price}円です。";
            $this->uriage += $price;
        }
        $this->thanks();
    }
}
