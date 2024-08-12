<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title> </title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>

        <?php
        require_once("lib/util.php");

        $utf8_string = "こんにちは。";
        $sjis_string = mb_convert_encoding($utf8_string, 'Shift-JIS');

        $encoding = mb_internal_encoding();


        if (cken([$sjis_string])) {
            echo '配列の値は、', $encoding, 'です。';
        } else {
            echo '配列の値は、', $encoding, 'ではありません。';
        }
        ?>

    </div>
</body>

</html>