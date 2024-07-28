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
        //クッキー変数を調べる
        echo "クッキーを確認しました", "<hr>";

        if (isset($_COOKIE["message"])) {
            $message = $_COOKIE["message"];
            echo "クッキーの値：", es($message), "<hr>";
        } else {
            echo "クッキーはありません", "<hr>";
            echo '<a href="set_cookie.php">クッキーを設定するページへ</a>';
        }

        ?>
    </div>
</body>

</html>