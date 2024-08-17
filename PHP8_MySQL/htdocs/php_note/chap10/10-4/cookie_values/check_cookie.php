<?php
require_once("../../../lib/util.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>クッキー確認ページ</title>
    <link href="../../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php
        echo "クッキーを確認しました。<br>";
        if (isset($_COOKIE["message"])) {
            $msg = $_COOKIE["message"];
            echo "クッキーの値：", es($msg), "<hr>";
            echo '<a href = "delete_cookie.php">クッキーを削除する</a>';
        } else {
            echo "クッキーはありません。<hr>";
            echo '<a href = "set_cookie.php">クッキーを削除する</a>';
        }
        ?>
    </div>
</body>

</html>