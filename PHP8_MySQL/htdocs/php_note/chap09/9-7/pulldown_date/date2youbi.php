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
        if (!cken($_POST)) {
            $encoding = mb_internal_encoding();
            $err = "Encoding Error!" . $encoding;
            exit($err);
        }
        $_POST = es($_POST);
        ?>

        <?php
        $theYear = date('Y');
        $theMonth = date('n');
        $theDay = date('j');

        $error = [];

        if (isset($_POST['year']) && isset($_POST['month']) && isset($_POST['day'])) {
            $theYear = $_POST['year'];
            $theMonth = $_POST['month'];
            $theDay = $_POST['day'];
            $isDate = checkdate($theMonth, $theDay, $theYear);

            if (!$isDate) {
                $error[] = "日付として正しくありません";
            }
        } else {
            $isDate = false;
        }
        ?>

        <?php
        function yearOption()
        {
            global $theYear;

            $thisYear = date('Y');
            $startYear = $thisYear - 5;
            $endYear = $thisYear + 5;
            echo '<select name="year">';

            for ($i = $startYear; $i <= $endYear; $i++) {
                if ($i == $theYear) {
                    echo "<option value = {$i} selected>{$i}</option><br>";
                } else {
                    echo "<option value = {$i}>{$i}</option><br>";
                }
            }
            echo '</select>';
        }

        function monthOption()
        {
            global $theMonth;
            echo '<select name="month">';
            for ($i = 1; $i <= 12; $i++) {
                if ($i == $theMonth) {
                    echo "<option value={$i} selected>{$i}</option><br>";
                } else {
                    echo "<option value={$i}>{$i}</option><br>";
                }
            }
            echo '</select>';
        }

        function dayOption()
        {
            global $theDay;
            echo '<select name="day">';
            for ($i = 1; $i <= 31; $i++) {
                if ($i == $theDay) {
                    echo "<option value = {$i} selected>{$i}</option><br>";
                } else {
                    echo "<option value = {$i}>{$i}</option><br>";
                }
            }
            echo '</select>';
        }
        ?>

        <form method="POST" action="<?php echo es($_SERVER['PHP_SELF']); ?>">
            <ul>
                <li>
                    <?php yearOption(); ?>年
                    <?php monthOption(); ?>月
                    <?php dayOption(); ?>日
                </li>
                <li><input type="submit" value="送信する"></li>
            </ul>
        </form>

        <?php
        if ($isDate) {
            $dateString = $theYear . "-" . $theMonth . "-" . $theDay;
            $dateObj = new DateTime($dateString);

            $date = $dateObj->format("Y年m月d日");
            $w = (int)$dateObj->format("w");
            $week = ["日", "月", "火", "水", "木", "金", "土"];
            $youbi = $week[$w];
            echo "<HR>";
            echo "{$date}は、{$youbi}曜日です。";
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