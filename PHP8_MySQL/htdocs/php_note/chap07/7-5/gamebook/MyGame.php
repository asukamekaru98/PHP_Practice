<?php
require_once("GameBook.php");

class MyGame implements GameBook
{
    public $hitPoint;

    function __construct(int $coins = 1)
    {
        $startPoint = 100 * $coins;
        $this->newGame($startPoint);
    }

    public function newGame(int $point)
    {
        $this->hitPoint = $point;
        echo "スタート、{$point}ポインタ<br>";
    }

    public function play()
    {
        $num = random_int(0, 50);
        if ($num % 2 == 0) {
            echo "+{$num}↑<br>";
            $this->hitPoint += $num;
        } else {
            echo "-{$num}↓<br>";
            $this->hitPoint -= $num;
        }
        echo "現在{$this->hitPoint}ポイント<br>";
    }

    public function isAlive(): bool
    {
        return ($this->hitPoint > 0);
    }
}
