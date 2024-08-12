<?php
require_once("TaroTool.php");
require_once("HanaTool.php");

class MyClass
{
    use TaroTool, HanaTool {
        TaroTool::hello as taroHello;       // 別名で実行できるようにする
        HanaTool::hello as hanaHello;       // 別名で実行できるようにする
        HanaTool::hello insteadof TaroTool; // 単にhelloが呼ばれたときは、HanaToolのhelloを実行する
    }
}
