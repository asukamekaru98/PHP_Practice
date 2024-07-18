<?php
$teamA = ["赤井一郎", "伊藤五郎", "上野信二"];
$teamB = ["江藤幸代", "小野幸子"];

function teamList($teamname, $nameList)
{
    echo "{$teamname}", "<br>";
    echo "<ol>", "<br>";
    for ($i = 0; $i < count($nameList); $i++) {
        echo "<li>", $nameList[$i], "</li><br>";
    }
    echo "</ol><br>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>名前の配列</title>
</head>

<!--チームの表示-->
<?php
teamList('Aチーム', $teamA);
teamList('Bチーム', $teamB);
?>

</html>