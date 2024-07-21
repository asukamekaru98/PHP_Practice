<?php
require_once("DateTool.php");

class Milk
{
    use DateTool;
    public $theDate;
    public $limitDate;

    function __construct()
    {
        $now = new DateTime();                              //時間取得
        $this->theDate = $this->ymdString($now);            //時間を文字化
        $this->limitDate = $this->addYmdString($now, 10);   //時間+10日を文字化
    }
}
