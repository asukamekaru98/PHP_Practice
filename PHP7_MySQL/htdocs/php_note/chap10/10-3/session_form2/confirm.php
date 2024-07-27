<?php
require_once("../../lib/util.php");
session_start();
?>

<?php
//文字コード検証
if (!cken($_POST)) {
    $encoding = mb_internal_encoding();
    $err = "Encoding Error!" . $encoding;
    exit($err);
}
?>

<?php
$error = [];

if (empty($_SESSION['name'])) {
    $error[] = "名前を";
} else {
    $name = $_SESSION['name'];
}

if (empty($_SESSION['kotoba'])) {
    $error[] = "言葉を";
} else {
    $kotoba = $_SESSION['kotoba'];
}

if (isset($_POST['dogcat'])) {
    $dogcat = $_POST['dogcat'];
    $_SESSION['dogcat'] = $dogcat;

    $diffValue = array_diff($dogcat, ["犬", "猫"]);
    if (count($diffValue) > 0) {
        $error[] = "犬好き猫好きの回答おかしい";
    }

    $dogcatString = implode("好きで、", $dogcat) . "好きです";
} else {
    $dogcatString = "どっちも好きじゃない";
    $_SESSION['dogcat'] = [];
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>確認ページ</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <form>
            <?php if (count($error) > 0) { ?>

                <span class="error"><?php echo implode('<br>', $error); ?></span><br>
                <span>
                    <input type="button" value="戻る" onclick="location.href='input.php'">
                </span>
            <?php } else { ?>

                <span>
                    名前：<?php echo es($name); ?><br>
                    好きな言葉：<?php echo es($kotoba); ?><br>
                    犬猫好き？：<?php echo es($dogcatString); ?><br>
                    <input type="button" value="訂正する" onclick="location.href='input.php'">
                    <input type="button" value="送信する" onclick="location.href='thankyou.php'">
                </span>

            <?php } ?>
        </form>
    </div>
</body>

</html>