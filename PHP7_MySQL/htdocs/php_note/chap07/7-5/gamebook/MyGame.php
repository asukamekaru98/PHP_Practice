<?php
require_once("GameBook.php");

class MyGame implements GameBook
{
    public $hitPoint;

    function __construct($point = 50)
    {
        $this->newGame($point);
    }

    public function newGame($point = 50)
    {
        $this->hitPoint = $point;
    }

    public function play()
    {
        $num = random_int(0, 50);
        if ($num % 2 == 0) {
            echo "{$num}ポイント増えました", "<br>";
            $this->hitPoint += $num;
        } else {
            echo "{$num}ポイント減りました", "<br>";
            $this->hitPoint -= $num;
        }
        echo "現在{$this->hitPoint}ポイント", "<br>";
    }

    public function isAlive(): bool
    {
        return ($this->hitPoint > 0);
    }
}
