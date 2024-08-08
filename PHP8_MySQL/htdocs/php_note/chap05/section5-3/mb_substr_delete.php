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
        $msg = "春はあけぼの。";
        $msg = mb_substr($msg, 0, -1);
        echo $msg;
        ?>
    </pre>
</body>

</html>