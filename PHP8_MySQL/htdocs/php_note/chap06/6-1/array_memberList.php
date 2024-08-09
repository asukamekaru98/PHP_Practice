<?php
$member1 = ['name' => '赤井一郎', 'age' => 29];
$member2 = ['name' => '伊藤五郎', 'age' => 32];
$member3 = ['name' => '上野信二', 'age' => 37];
$member4 = ['name' => '江藤幸代', 'age' => 26];
$member5 = ['name' => '小野幸子', 'age' => 32];

print_r($member1);
echo "<br>";
print_r($member2);
echo "<br>";
print_r($member3);
echo "<br>";
print_r($member4);
echo "<br>";
print_r($member5);
echo "<br><br>";

$teamA = [$member1, $member2, $member3];
$teamB = [$member4, $member5];

print_r($teamA);
echo "<br>";
print_r($teamB);
