<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>セッション開始ページ</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        このページから購入するとクーポン割引が適用されます。<br>
        <?php

       $_SESSION["coupon"] = "ABC123";
        ?>

      <a href="goal_page.php">つぎへ</a>
       
    </div>
</body>

</html>