<?php
require_once("Playey.php");

class Runner extends Player
{
    public $age;

    function __construct($name, $age)
    {
        $this->age = $age;
    }

    public function who()
    {
        echo "{$this->name},{$this->age}歳です。", "<br>";
    }

    public function play()
    {
        echo "{$this->name}が走る！", "<br>";
    }
}
