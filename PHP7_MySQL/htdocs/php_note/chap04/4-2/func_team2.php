<?php
function team($name, ...$members)
{
    // 配列$members の名前を連結する。
    $list = implode("、", $members);
    return "{$name}:{$list}";
}

$team1 = team("Peach", "Sato", "Tanaka", "Kato");
$team2 = team("KABOSU", "HIROSHI", "KY-ECOH");
echo $team1 . "<br>" . PHP_EOL;
echo $team2;
