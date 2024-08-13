<?php
session_start();    // セッション開始
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>セッション開始ページ</title>
    <link href="../../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        このページから購入するとクーポン割引が適用されます。<br>
        <?php
        $_SESSION["coupon"] = "ABC123";
        ?>
        <a href="goal_page.php">次のページへ</a>
    </div>
</body>

</html>