<?php
require_once("WorldRule.php");

class MyClass75 implements WorldRule
{
    //必ず作成する
    public function hello()
    {
        echo "こんにちは", "<br>";
    }

    public function thanks()
    {
        echo "ありがとう", "<br>";
    }
}
