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
        $data = $_GET["data"];
        $data = rawurldecode($data);
        $data = htmlspecialchars(string: $data, flags: ENT_QUOTES, encoding: 'UTF-8');
        echo "「{$data}」を受け取りました";
        ?>
    </div>
</body>

</html>