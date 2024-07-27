<?php
session_start();
require_once("../../lib/util.php");

if (isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
}

if (isset($_POST['kotoba'])) {
    $_SESSION['kotoba'] = $_POST['kotoba'];
}

if (empty($_SESSION['dogcat'])) {
    $dogcat = [];
} else {
    $dogcat = $_SESSION['dogcat'];
}

function checked($value, $question)
{
    if (is_array($question)) {
        $isChecked = in_array($value, $question);
    } else {
        $isChecked = ($value === $question);
    }

    if ($isChecked) {
        echo "checked";
    } else {
        echo "";
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>犬好き猫好きページ</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        アンケート(2/2)<br>
        <form method="POST" action="confirm.php">
            <ul>
                <li><span>犬が好きですか猫が好きですか</span><br>
                    <label><input type="checkbox" name="dogcat[]" value="犬" <?php checked("犬", $dogcat); ?>>犬が好き</label><br>
                    <label><input type="checkbox" name="dogcat[]" value="猫" <?php checked("猫", $dogcat); ?>>猫が好き</label><br>
                </li>
                <input type="button" value="戻る" onclick="location.href='input.php'">
                <input type="submit" value="確認する">
            </ul>
        </form>
    </div>
</body>

</html>