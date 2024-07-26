<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>スライダー</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php

        require_once("../../lib/util.php");
        //文字コード検証
        if (!cken($_POST)) {
            $encoding = mb_internal_encoding();
            $err = "Encoding Error!" . $encoding;
            exit($err);
        }
        //HTML escape
        $_POST = es($_POST);
        ?>

        <?php
        // エラーメッセージ入力配列
        $error = [];

        $min = 1;
        $max = 5;

        if (isset($_POST["taste"])) {
            $taste = $_POST["taste"];

            $isTaste = ctype_digit($taste) && ($taste >= $min) && ($taste <= $max);
            if (!$isTaste) {
                $error[] = "甘味の値に入力エラーあり";
                $taste = $min;
            }
        } else {
            //POSTされてないとき
            $taste = round(($min + $max) / 2);
            $isTaste = true;
        }
        ?>

        <form method="POST" action="<?php echo es($_SERVER['PHP_SELF']); ?>">
            <ul>
                <li><span>甘味：</span>
                    <input type="range" name="taste" min="1" max="5" step="1" value="<?php echo es($taste); ?>">
                </li>
                <li><input type="submit" value="送信する"></li>
            </ul>
        </form>

        <?php
        if ($isTaste) {
            $tasteList = ["甘い", "少し甘い", "普通", "少し苦い", "苦い"];
            echo "<HR>";
            echo "甘味は「{$taste}.{$tasteList[$taste - 1]}」です。";
        }
        ?>

        <?php
        if (count($error) > 0) {
            echo "<HR>";
            echo '<span class = "error">', implode("<br>", $error), '</span>';
        }
        ?>

    </div>
</body>

</html>