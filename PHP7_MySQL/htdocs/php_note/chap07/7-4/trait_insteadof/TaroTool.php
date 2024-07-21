<?php
trait TaroTool
{
    public function hello()
    {
        echo "ハロー！";
    }

    public function weekday()
    {
        $week = ["日", "月", "火", "水", "木", "金", "土",];
        $now = new DateTime();

        $w = (int)$now->format('w');
        $weekday = $week[$w];
        echo "今日は", $weekday, "曜日です。";
    }
}
