<?php
$msg = "ハロー";
$result = setcookie("message", $msg);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>クッキー保存ページ</title>
    <link href="../../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php
        if ($result) {
            echo "クッキーを保存しました。", "<hr>";
            echo '<a href = "check_cookie.php">クッキーを確認するページへ</a>';
        } else {
            echo '<span class="error">クッキーの保存でエラーがありました。</span>', "<br>";
        }
        ?>
    </div>
</body>

</html>