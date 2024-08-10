<?php

class Staffbar1
{
    function __construct(public string $name, public int  $age) {}

    public function hello()
    {
        if (is_null($this->name)) {
            echo "こんにちは！", "<br>";
        } else {
            echo "こんにちは、{$this->name}です！", "<br>";
        }
    }
}
