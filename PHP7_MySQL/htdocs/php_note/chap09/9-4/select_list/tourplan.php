<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>リストボックス</title>
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

        if (isset($_POST['meal'])) {
            $meals = ["朝食", "夕食"];
            $diffValue = array_diff($_POST['meal'], $meals);

            if (count($diffValue) == 0) {
                $mealSelected = $_POST["meal"];
            } else {
                $mealSelected = [];
                $error[] = "「朝食」に入力エラーあり";
            }
        } else {
            //POSTされてないとき
            $mealSelected = [];
        }

        if (isset($_POST['tour'])) {
            $tours = ["カヌー", "MTB", "トレラン"];
            $diffValue = array_diff($_POST['tour'], $tours);

            if (count($diffValue) == 0) {
                $tourSelected = $_POST["tour"];
            } else {
                $tourSelected = [];
                $error[] = "「ツアー」に入力エラーあり";
            }
        } else {
            //POSTされてないとき
            $tourSelected = [];
        }
        ?>

        <?php
        // 初期値でチェックするかどうか
        function selected($value, $question)
        {
            if (is_array($question)) {
                $isSelected = in_array($value, $question);
            } else {
                $isSelected = ($value === $question);
            }
            if ($isSelected) {
                echo "selected";
            } else {
                echo "";
            }
        }
        ?>

        <form method="POST" action="<?php echo es($_SERVER['PHP_SELF']); ?>">
            <ul>
                <li><span>食事：</span>
                    <select name="meal[]" size=2 multiple>
                        <option value="朝食" <?php selected("朝食", $mealSelected); ?>>朝食</option>
                        <option value="夕食" <?php selected("夕食", $mealSelected); ?>>夕食</option>
                    </select>
                </li>
                <li><span>ツアー：</span>
                    <select name="tour[]" size=3[\:^ 0] multiple>
                        <option value="カヌー" <?php selected("カヌー", $tourSelected); ?>>カヌー</option>
                        <option value="MTB" <?php selected("MTB", $tourSelected); ?>>MTB</option>
                        <option value="トレラン" <?php selected("トレラン", $tourSelected); ?>>トレラン</option>
                    </select>
                </li>
                <li><input type="submit" value="送信"></li>
            </ul>
        </form>

        <?php
        $isSelected = count($mealSelected) > 0 && count($tourSelected) > 0;
        echo "<HR>";
        if ($isSelected) {
            echo "お食事：", implode("と", $mealSelected), "<br>";
            echo "ツアー：", implode("と", $tourSelected), "<br>";
        } else {
            echo "選択なし";
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