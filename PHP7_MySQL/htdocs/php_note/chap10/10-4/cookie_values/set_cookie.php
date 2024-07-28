<?php
$message = "ハロー";
$result = setcookie("message", $message);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>クッキー保存ページ</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php
        if ($result) {
            echo "クッキー保存しました", "<hr>";
            echo '<a href="check_cookie.php">クッキーを確認するページへ</a>';
        } else {
            echo '<span class="error">クッキーの保存でエラー！</span>', "<br>";
        }

        ?>
    </div>
</body>

</html>