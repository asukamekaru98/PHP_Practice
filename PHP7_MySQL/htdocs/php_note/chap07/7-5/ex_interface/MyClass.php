<?php
require_once("WorldRule.php");

class MyClass7_5 implements WorldRule
{
    public function hello()
    {
        echo "こんにちは", "<br>";
    }

    public function thx()
    {
        echo "ありがとう", "<br>";
    }
}
