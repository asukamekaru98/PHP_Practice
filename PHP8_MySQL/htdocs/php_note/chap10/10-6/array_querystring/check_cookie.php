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
        if (isset($_COOKIE["gamedata"])) {
            $dataQueryString = $_COOKIE["gamedata"];
            parse_str($dataQueryString, $gamedata);
            $gamedata = es($gamedata);
            foreach ($gamedata as $key => $value) {
                echo "{$key}:{$value}<br>";
            }
            echo "<br>";
        } else {
            echo '<span class="error">クッキーはありません。</span>';
        }
        ?>
        <a href="set_cookie.php">戻る</a>
    </div>
</body>

</html>