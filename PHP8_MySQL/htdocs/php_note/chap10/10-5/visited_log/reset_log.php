<?php
$result1 = setcookie('visitedLog[counter]', "", time() - 3600);
$result2 = setcookie('visitedLog[time]', "", time() - 3600);
$result = ($result1 && $result2);


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>リセットページ</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php
        if ($result) {
            echo "訪問ログのクッキーを破棄しました", "<hr>";
            echo '<a href="page1.php">ページ1に戻る</a>', "<br>";
        } else {
            echo '<span class="error">クッキーリセットエラー！</span>';
        }

        ?>
    </div>
</body>

</html>