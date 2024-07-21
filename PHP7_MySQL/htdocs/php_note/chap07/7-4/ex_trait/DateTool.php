<?php
trait DateTool
{
    //日付文字化
    public function ymdString($date)
    {
        $dateString = $date->format('Y年m月d日');
        return $dateString;
    }

    //日付を指定日数増やす
    public function addYmdString($date, $days)
    {
        $date->add(new DateInterval("P{$days}D"));
        return $this->ymdString($date);
    }
}
