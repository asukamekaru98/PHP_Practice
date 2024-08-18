<?php
require_once("../../lib/util.php");

if (isset($_COOKIE["visitedCounter"])) {
    $visitedCounter = $_COOKIE["visitedCounter"];
} else {
    $visitedCounter = 0;
}
$result = setcookie("visitedCounter", ++$visitedCounter, time() + 60 * 5);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>page1</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php
        if ($result) {
            echo "このページの訪問は", es($visitedCounter), "回目です。<hr>";
            echo '<a href="page2.php">ページを移動する</a>', "<br>";
            echo '(<a href="reset_counter.php">リセットする</a>)';
        } else {
            echo '<span class="error">クッキーが利用できませんでした！</span>';
        }

        ?>
    </div>
</body>

</html>