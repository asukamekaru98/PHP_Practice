<?php
require_once("../../lib/util.php");
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>クッキー確認ページ</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php
        if (isset($_COOKIE["fruits"])) {
            $valueString = $_COOKIE["fruits"];
            $fruits = explode("&", $valueString);
            $fruits = es($fruits);

            echo "好きなフルーツ：", "<br>";
            echo implode("<br>", $fruits), "<br>";
        } else {
            echo "クッキーはありません", "<hr>";
        }

        ?>
        <a href="set_cookie.php">戻る</a>
    </div>
</body>

</html>