<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>GETリクエスト処理</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php
        // GETリクエストのパラメータの値を受け取る
        $no = $_GET["no"];
        // 番号リスト
        $nolist = [3, 5, 7, 8, 9];
        // 検索する
        if (in_array($no, $nolist)) {
            echo "{$no}はありました。";
        } else {
            echo "{$no}は見つかりません。";
        }
        ?>
    </div>
</body>

</html>