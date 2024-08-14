<?php
require_once("../../../lib/util.php");
// セッション開始
session_start();
?>

<?php
// 文字エンコードの検証
if (!cken($_POST)) {
    $enco = mb_internal_encoding();
    $err = "Encoding Err" . $enco;
    exit($err);
}
?>

<?php
if (isset($_POST['name'])) {
    $_SESSION['name'] = trim(mb_convert_kana($_POST['name'], "s"));
}
if (isset($_POST['kotoba'])) {
    $_SESSION['kotoba'] = trim(mb_convert_kana($_POST['kotoba'], "s"));
}

$err = [];
if (empty($_SESSION['name'])) {
    $err[] = "名前を入力してください。";
} else {
    $name = $_SESSION['name'];
}

if (empty($_SESSION['kotoba'])) {
    $err[] = "好きな言葉を入力してください。";
} else {
    $kotoba = $_SESSION['kotoba'];
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>確認ページ</title>
    <link href="../../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php if (count($err) > 0) { ?>
            <span class="error"><?php echo implode('<br>', $err); ?></span><br>
            <span><input type="button" value="戻る" onclick="location.href='input.html'"></span>
        <?php } else { ?>
            <span>
                名前：<?php echo es($name); ?><br>
                好きな言葉：<?php echo es($kotoba); ?><br>
                <input type="button" value="戻る" onclick="location.href='input.html'">
                <input type="button" value="送信する" onclick="location.href='thankyou.php'">
            </span>
        <?php } ?>
    </div>
</body>

</html>