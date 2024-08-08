<?php
function price(string $str)
{
    $kakaku = 3000;
    $length = mb_strlen($str);

    if ($length > 10) {
        $kakaku += ($length - 10) * 100;
    }
    $kakaku = number_format($kakaku);
    $result = "{$length}文字{$kakaku}円";
    return $result;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>文字数によって料金を計算する</title>
</head>

<body>
    <pre>
        <?php
        $id = "Peace";
        $length = strlen($id);
        for ($i = 0; $i < $length; $i++) {
            $chr = $id[$i];
            echo "{$i}-", $chr, "<br>";
        }
        ?>
    </pre>
</body>

</html>