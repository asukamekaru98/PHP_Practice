<?php
require_once("../../../lib/util.php");
// セッション開始
session_start();

$err = [];

if (!empty($_SESSION['name']) && !empty($_SESSION['kotoba'])) {
    $name = $_SESSION['name'];
    $kotoba = $_SESSION['kotoba'];
} else {
    $err[] = "セッションエラーです。";
}
killsession();
?>

<?php
// セッション破棄
function killsession()
{
    //セッション変数の値を空にする
    $_SESSION = [];
    //セッションクッキーの破棄
    if (isset($_COOKIE[session_name()])) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 36000, $params['path']);
    }
    session_destroy();
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>完了ページ</title>
    <link href="../../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php if (count($err) > 0) { ?>
            <span class="error"><?php echo implode('<br>', $err); ?></span><br>
            <a href="input.html">最初のページに戻る</a>
        <?php } else { ?>
            <span>
                次のように受け取りました。ありがとうございました。
                <HR>
                名前：<?php echo es($name); ?><br>
                好きな言葉：<?php echo es($kotoba); ?><br>
                <a href="input.html">最初のページに戻る</a>
            </span>
        <?php } ?>
    </div>
</body>

</html>