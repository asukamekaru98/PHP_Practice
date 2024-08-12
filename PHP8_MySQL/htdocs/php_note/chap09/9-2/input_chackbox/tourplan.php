<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>ラジオボタン</title>
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
        $error = [];
        if (isset($_POST['meal'])) {
            $meals = ["朝食", "夕食"];
            $diffValue = array_diff($_POST['meal'], $meals);

            if (count($diffValue) == 0) {
                $mealChecked = $_POST["meal"];
            } else {
                $mealChecked = [];
                $error[] = "「朝食」に入力エラーあり";
            }
        } else {
            $mealChecked = [];
        }

        if (isset($_POST['tour'])) {
            $tours = ["カヌー", "MTB", "トレラン"];
            $diffValue = array_diff($_POST['tour'], $tours);

            if (count($diffValue) == 0) {
                $tourChecked = $_POST["tour"];
            } else {
                $tourChecked = [];
                $error[] = "「ツアー」に入力エラーあり";
            }
        } else {
            $tourChecked = [];
        }
        ?>

        <?php
        function checked(string $value, array $question)
        {
            if (in_array($value, $question)) {
                echo "checked";
            }
        }
        ?>

        <form method="POST" action="<?php echo es($_SERVER['PHP_SELF']); ?>">
            <ul>
                <li><span>性別：</span>
                    <label><input type="checkbox" name="meal[]" value="朝食" <?php checked("朝食", $mealChecked); ?>>朝食</label>
                    <label><input type="checkbox" name="meal[]" value="夕食" <?php checked("夕食", $mealChecked); ?>>夕食</label>
                </li>
                <li><span>結婚：</span>
                    <label><input type="checkbox" name="tour[]" value="カヌー" <?php checked("カヌー", $tourChecked); ?>>カヌー</label>
                    <label><input type="checkbox" name="tour[]" value="MTB" <?php checked("MTB", $tourChecked); ?>>MTB</label>
                    <label><input type="checkbox" name="tour[]" value="トレラン" <?php checked("トレラン", $tourChecked); ?>>トレラン</label>
                </li>
                <li><input type="submit" value="送信"></li>
            </ul>
        </form>

        <?php
        $isSelected = count($mealChecked) > 0 || count($tourChecked) > 0;
        if ($isSelected) {
            echo "<HR>";
            echo "お食事：", implode("と", $mealChecked), "<br>";
            echo "ツアー：", implode("と", $tourChecked), "<br>";
        } else {
            echo "<HR>";
            echo "選択されているものはありません";
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