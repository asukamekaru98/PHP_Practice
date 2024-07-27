<?php
require_once("../../lib/util.php");
session_start();

$error = [];
if (!empty($_SESSION['name']) && !empty($_SESSION['kotoba'])) {
    $name = $_SESSION['name'];
    $kotoba = $_SESSION['kotoba'];
} else {
    $error[] = "セッションエラーです";
}

killsession(); //HTMLを表示する前にセッションを破棄する
?>

<?php
function killsession()
{
    $_SESSION = [];
    if (isset($_COOKIE[session_name()])) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 36000, $params['path']);
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>完了ページ</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php if (count($error) > 0) { ?>
            <span class="error"><?php echo implode('<br>', $error); ?></span><br>
            <a href="input.html">最初のページに戻る</a>
        <?php } else { ?>
            <span>
                次のように受け付けました。ありがとうございました。
                <HR>
                <span>
                    名前：<?php echo es($name); ?><br>
                    好きな言葉：<?php echo es($kotoba); ?><br>
                </span>
            </span>
        <?php } ?>
    </div>
</body>

</html>