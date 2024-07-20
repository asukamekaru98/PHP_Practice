<?php
class Player
{
    public $name;
    function __construct($name = '名無し')
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return $this->name;
    }

    public function who()
    {
        echo "{$this->name}です。", "<br>";
    }
}
