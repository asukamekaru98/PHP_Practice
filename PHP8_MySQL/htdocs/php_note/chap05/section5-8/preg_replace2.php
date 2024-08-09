<?php
$pattern = ["/開始日/u", "/開始時間/u"];
$replacement = ["金曜日", "午後2:30"];
$subject = "次回は開催日の開始時間からです。";
$result = preg_replace($pattern, $replacement, $subject);
echo $result;
