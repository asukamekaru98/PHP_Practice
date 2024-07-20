<?php
$numList = [1008, 1234, 1301];
$numbers = [1301, 1206, 1008, 1214];

function checkNumber($no)
{
    global $numbers;

    print_r($no);
    echo "<br>";
    print_r($numbers);
    echo "<br>";

    if (is_array($no, $numbers)) {
        echo "{$no}版は合格です";
    } else {
        echo "{$no}版は見つかりません";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>配列を検索する</title>
</head>

<body>
    <?php
    echo "<ol><br>";
    foreach ($numList as $value) {
        echo "<li>", checkNumber($value), "</li><br>";
    }
    echo "</ol><br>";

    print_r($numList);
    echo "<br>";
    print_r($numbers);
    echo "<br>";
    ?>
</body>

</html>