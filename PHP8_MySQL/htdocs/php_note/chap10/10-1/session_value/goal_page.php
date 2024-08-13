<?php
require_once("../../../lib/util.php");
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
        <?php
        if (isset($_SESSION["coupon"])) {
            $coupon = $_SESSION["coupon"];
            $couponList = ["ABC123", "XYZ999"];
            if (in_array($coupon, $couponList)) {
                echo es($coupon), "は正しいクーポンコードです。";
            } else {
                echo es($coupon), "は誤ったクーポンコードです。";
            }
        } else {
            echo "session error";
        }
        ?>
    </div>
</body>

</html>