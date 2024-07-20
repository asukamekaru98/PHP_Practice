<?php
trait DateTool
{
    public function ymdString($date)
    {
        $dateString = $date->format('Y年m月d日');
        return $dateString;
    }

    public function addYmdString($date, $days)
    {
        $date->add(new DateInterval("P{$days}D"));
        return $this->ymdString($date);
    }
}
