<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>フォーム入力の値で計算する</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php
        $tanka = $_POST["tanka"];
        $kosu = $_POST["kosu"];

        $price = $tanka * $kosu;

        $tanka = number_format($tanka);
        $price = number_format($price);
        echo "単価{$tanka}円 X {$kosu}子は{$price}円です。";

        ?>


    </div>
</body>

</html>