<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>URLエスケープ（GET）</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php

        // URLエンコードする
        $data = "東京";
        $data = rawurlencode($data);
        // クエリ文字列のリンクを作る
        $url = "checkData.php";
        echo "<a href={$url}?data={$data}>", "送信する", "</a>";
        ?>
    </div>
</body>

</html>