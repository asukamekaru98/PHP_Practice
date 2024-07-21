<?php
require_once("TaroTool.php");
require_once("HanaTool.php");

class MyClass
{
    use TaroTool, HanaTool {
        TaroTool::hello as taroHello;   //それぞれのhello関数に別名をつける
        HanaTool::hello as hanaHello;   //それぞれのhello関数に別名をつける

        HanaTool::hello insteadof TaroTool;     //単にhelloが呼ばれた場合、Hanaのhello関数を使う
    }
}
