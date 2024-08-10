<?php

class Staffbar2
{
    public static $piggyBank = 0;
    public static function deposit(int $yen = 0)
    {
        self::$piggyBank += $yen;
    }

    function __construct(public string $name, public int  $age) {}

    public function hello()
    {
        if (is_null($this->name)) {
            echo "こんにちは！", "<br>";
        } else {
            echo "こんにちは、{$this->name}です！", "<br>";
        }
    }

    public function latePenalty()
    {
        echo "{$this->name}さんが遅刻して罰金を払いました。<br>";
        self::deposit(1000);
    }
}
