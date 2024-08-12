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
        $error = [];
        if (!isset($_POST['theDate'])) {
            $isDate = false;
            $postDate = "";
        } else {

            $postDate = trim($_POST["theDate"]);
            $postDate = mb_convert_kana($postDate, "as");
            $pattern1 = preg_match("/^[0-9]{4}-[0-9]{1,2}-[0-9]{1,2}$/", $postDate);
            $pattern2 = preg_match("#^[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}$#", $postDate);

            if ($pattern1) {
                $dateArray = explode("-", $postDate);
            }
            if ($pattern2) {
                $dateArray = explode("/", $postDate);
            }

            if ($pattern1 || $pattern2) {
                $theYear = $dateArray[0];
                $theMonth = $dateArray[1];
                $theDay = $dateArray[2];

                $isDate = checkdate($theMonth, $theDay, $theYear);

                if (! $isDate) {
                    $error[] = "日付として正しくありません";
                }
            } else {
                $today = new DateTime();
                $today1 = $today->format("Y-n-j");
                $today2 = $today->format("Y/n/j");
                $error[] = "日付は次のどちらかの形式で入力してください。<br>{$today1}または{$today2}";
                $isDate = false;
            }
        }
        ?>

        <form method="POST" action="<?php echo es($_SERVER['PHP_SELF']); ?>">
            <ul>
                <li><span>日付を選ぶ：</span>
                    <input type="date" name="theDate" value=<?php echo "{$postDate}" ?>>
                </li>
                <li><input type="submit" value="送信"></li>
            </ul>
        </form>

        <?php
        if ($isDate) {
            $dateObj = new DateTime($postDate);
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