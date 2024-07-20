<?php
require_once("DateTool.php");

class Milk
{
    use DateTool;
    public $theDate;
    public $limitDate;

    function __construct()
    {
        $now = new DateTime();
        $this->theDate = $this->ymdString($now);
        $this->limitDate = $this->addYmdString($now, 10);
    }
}
