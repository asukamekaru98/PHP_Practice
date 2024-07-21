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
        //GETリクエストのパラメータ値を受け取る
        $data = $_GET["data"];

        //URLデコード
        $data = rawurldecode($data);

        //XSS対策
        $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
        echo "「{$data}」を受け取りました";
        ?>
    </div>
</body>

</html>