<?php
require_once("TaroTool.php");
require_once("HanaTool.php");

class MyClass
{
    use TaroTool, HanaTool {
        HanaTool::hello insteadof TaroTool;
    }
}
