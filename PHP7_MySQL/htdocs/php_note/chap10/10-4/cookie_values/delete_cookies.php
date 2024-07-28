<?php
// 有効期限を過去にすることでクッキーを削除することができる
$result = setcookie("message", "", time() - 3600);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>クッキー削除ページ</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php
        if ($result) {
            echo "クッキー削除しました", "<hr>";
            echo '<a href="check_cookie.php">クッキーを確認するページへ</a>';
        } else {
            echo '<span class="error">クッキーの削除でエラー！</span>', "<br>";
        }

        ?>
    </div>
</body>

</html>