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

        if (isset($_POST["sex"])) {
            $sexValue = ["男性", "女性"];
            $isSex = in_array($_POST['sex'], $sexValue);

            if ($isSex) {
                $sex = $_POST["sex"];
            } else {
                $sex = "error";
                $error[] = "「性別」に入力エラーあり";
            }
        } else {
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
            $isMarriage = false;
            $marriage = "独身";
        }
        ?>

        <?php
        function checked(string $value, array $question)
        {
            $isChecked = in_array($value, $question);

            if ($isChecked) {
                echo "checked";
            }
        }
        ?>

        <form method="POST" action="<?php echo es($_SERVER['PHP_SELF']); ?>">
            <ul>
                <li><span>性別：</span>
                    <label><input type="radio" name="sex" value="男性" <?php checked("男性", [$sex]); ?>>男性</label>
                    <label><input type="radio" name="sex" value="女性" <?php checked("女性", [$sex]); ?>>女性</label>
                </li>
                <li><span>結婚：</span>
                    <label><input type="radio" name="marriage" value="独身" <?php checked("独身", [$marriage]); ?>>独身</label>
                    <label><input type="radio" name="marriage" value="既婚" <?php checked("既婚", [$marriage]); ?>>既婚</label>
                    <label><input type="radio" name="marriage" value="同棲中" <?php checked("同棲中", [$marriage]); ?>>同棲中</label>
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