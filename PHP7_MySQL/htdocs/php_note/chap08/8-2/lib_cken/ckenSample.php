<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>不正なエンコーディングによる攻撃対策 cken()</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>

        <?php
        require_once("lib/util.php");
        //shift-jisの文字列を作成
        $utf8_string = "こんにちは。";
        $sjis_string = mb_convert_encoding($utf8_string, 'Shift-JIS');

        //現在の内部文字エンコーディングを取得するPHPの関数呼び出し
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