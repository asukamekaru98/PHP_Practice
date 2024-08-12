<?php
trait DateTool
{
    //取得した時間情報をYMD方式にして返す
    public function ymdString(DateTime $date): string
    {
        $dateString = $date->format('Y年m月d日');
        return $dateString;
    }

    // 指定した日後の年月日を返す
    public function addYmdString(DateTime $date, int $days): string
    {
        $date->add(new DateInterval("P{$days}D"));
        return $this->ymdString($date);
    }
}
