<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>プルダウンメニュー</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php

        require_once("../lib/util.php");
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

        if (isset($_POST['sex'])) {
            $sexValue = ["男性", "女性"];
            $isSex = in_array($_POST['sex'], $sexValue);

            if ($isSex) {
                $sex = $_POST["sex"];
            } else {
                $sex = "error";
                $error[] = "「性別」に入力エラーあり";
            }
        } else {
            //POSTされてないとき
            $isSex = false;
            $sex = "男性";
        }

        if (isset($_POST['marriage'])) {
            $marriageValues = ["独身", "既婚", "同棲中"];
            $isMarriage = in_array($_POST['marriage'], $marriageValues);

            if ($isMarriage) {
                $marriage = $_POST["marriage"];
            } else {
                $marriage = "error";
                $error[] = "「既婚」に入力エラーあり";
            }
        } else {
            //POSTされてないとき
            $isMarriage = false;
            $marriage = "独身";
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
                <li><span>性別：</span>
                    <select name="sex">
                        <option value="男性" <?php selected("男性", $sex); ?>>男性</option>
                        <option value="女性" <?php selected("女性", $sex); ?>>女性</option>
                    </select>
                </li>
                <li><span>結婚：</span>
                    <select name="marriage">
                        <option value="独身" <?php selected("独身", $marriage); ?>>独身</option>
                        <option value="既婚" <?php selected("既婚", $marriage); ?>>既婚</option>
                        <option value="同棲中" <?php selected("同棲中", $marriage); ?>>同棲中</option>
                    </select>
                </li>
                <li><input type="submit" value="送信"></li>
            </ul>
        </form>

        <?php
        $isSubmited = $isSex && $isMarriage;
        if ($isSubmited) {
            echo "<HR>";
            echo "貴様は「{$sex}、{$marriage}」です";
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