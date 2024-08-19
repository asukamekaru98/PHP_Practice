<?php
require_once("../../../lib/util.php");
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>クッキーを保存する</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php
        if (isset($_COOKIE["fruits"])) {
            $cookieStrFruits = $_COOKIE["fruits"];
            $explodeCookieStr = explode("&", $cookieStrFruits);
            $explodeCookieStr = es($explodeCookieStr);
            echo "好きなフルーツ:<br>";
            echo implode("<br>", $explodeCookieStr), "<hr>";
        } else {
            echo '<span class="error">クッキーはありません。</span>';
        }
        ?>
        <a href="set_cookie.php">戻る</a>
    </div>
</body>

</html>