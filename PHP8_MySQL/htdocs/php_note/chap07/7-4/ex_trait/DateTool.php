<?php
trait DateTool
{
    public function ymdString(DateTime $date): string
    {
        $dateString = $date->format('Y年m月d日');
        return $dateString;
    }

    public function addYmdString(DateTime $date, int $days): string
    {
        $date->add(new DateInterval("P{$days}D"));
        return $this->ymdString($date);
    }
}
