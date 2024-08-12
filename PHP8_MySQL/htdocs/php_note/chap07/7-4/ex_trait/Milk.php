<?php
require_once("DateTool.php");

class Milk
{
    use DateTool;
    public String $theDate;     //作成日
    public String $limitDate;   //消費期限

    function __construct()
    {
        $now = new DateTime();
        $this->theDate = $this->ymdString($now);
        $this->limitDate = $this->addYmdString($now, 10);
    }
}
