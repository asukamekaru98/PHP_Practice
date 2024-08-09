<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>エンティティ変換</title>
</head>

<body>
    <?php
    $page = "PHP 8サンプル.html";
    $path = rawurldecode($page);
    $url = "http://sample.com/{$path}";
    echo $url;
    ?>

</body>

</html>