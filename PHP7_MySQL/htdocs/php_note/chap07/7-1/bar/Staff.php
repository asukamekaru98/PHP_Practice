<?php

class Staff4
{
    public static $piggyBank = 0;

    public static function deposit(int $yen)
    {
        self::$piggyBank += $yen;
    }

    public $name;
    public $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function hello()
    {
        if (is_null($this->name)) {
            echo "こんにちは！", "<br>";
        } else {
            echo "こんにちは、{$this->name}です！", "<br>";
        }
    }

    public function latePanalty()
    {
        self::deposit(1000);
    }
}
