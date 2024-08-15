<?php
session_start();    // セッション開始
require_once("../../../lib/util.php");

if (isset($_POST['name'])) {
    $_SESSION['name'] = trim(mb_convert_kana($_POST['name'], "s"));
}
if (isset($_POST['kotoba'])) {
    $_SESSION['kotoba'] = trim(mb_convert_kana($_POST['kotoba'], "s"));
}

if (empty($_SESSION['dogcat'])) {
    $dogcat = [];
} else {
    $dogcat = $_SESSION['dogcat'];
}
?>

<?php
function checked(string $value, array $checkedValues)
{
    $isChecked = in_array($value, $checkedValues);
    if ($isChecked) {
        echo "checked";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>犬好き猫好きページ</title>
    <link href="../../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        アンケート(2/2)<br>
        <form method="POST" action="confirm.php">
            <li><span>犬が好きですか？猫が好きですか？</span><br>
                <label><input type="checkbox" name="dogcat[]" value="犬" <?php checked("犬", $dogcat); ?>>犬が好き</label><br>
                <label><input type="checkbox" name="dogcat[]" value="猫" <?php checked("猫", $dogcat); ?>>猫が好き</label><br>
            </li>
            <input type="button" value="戻る" onclick="location.href='input.php'">
            <input type="submit" value="確認する">
        </form>
    </div>
</body>

</html>