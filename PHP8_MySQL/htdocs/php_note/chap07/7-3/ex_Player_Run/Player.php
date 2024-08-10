<?php
class Player
{
    function __construct(public string $name = '名無し') {}

    public function __toString()
    {
        return $this->name;
    }

    public function who()
    {
        echo "{$this->name}です。", "<br>";
    }
}
