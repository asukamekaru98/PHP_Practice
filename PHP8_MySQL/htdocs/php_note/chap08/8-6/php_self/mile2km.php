<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>計算ページ</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php

        require_once("../../lib/util.php");
        if (!cken($_POST)) {
            $encoding = mb_internal_encoding();
            $err = "Encoding Error!" . $encoding;
            exit($err);
        }
        $_POST = es($_POST);
        ?>

        <?php
        if (isset($_POST['mile'])) {
            $isNum = is_numeric($_POST["mile"]);
            if ($isNum) {
                $mile = $_POST["mile"];
                $error = "";
            } else {
                $mile = "";
                $error = '<span class = "error">←値を入力してください</span>';
            }
        } else {
            $isNum = false;
            $mile = "";
            $error = "";
        }
        ?>

        <form method="POST" action="<?php echo es($_SERVER['PHP_SELF']); ?>">
            <ul>
                <li>
                    <label>mileをkmに変換:
                        <input type="text" name="mile" value="<?php echo $mile ?>">
                    </label>
                    <?php echo $error; ?>
                </li>
                <li><input type="submit" value="計算する"></li>
            </ul>
        </form>
        <?php
        if ($isNum) {
            echo "<HR>";
            $kilometer = $mile * 1.609344;
            echo "{$mile}マイルは{$kilometer}kmです";
        }
        ?>
    </div>
</body>

</html>