<?php
function team($name, ...$members)
{
    $list = implode(",", $members);
    return "{$name}:{$list}";
}

$team1 = team("Peach", "佐藤", "田中", "加藤");
$team2 = team("かぼす", "ひろし", "きえこ");

echo $team1 . "<br>" . PHP_EOL;
echo $team2;
