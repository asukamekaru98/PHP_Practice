<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>割引購入ページ</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php

        require_once("../../lib/util.php");
        //文字コード検証
        if (!cken($_POST)) {
            $encoding = mb_internal_encoding();
            $err = "Encoding Error!" . $encoding;
            exit($err);
        }
        //HTML escape
        $_POST = es($_POST);
        ?>

        <!--合計金額チェック-->
        <?php
        if (isset($_POST['kosu'])) {
            $kosu = $_POST['kosu'];
        } else {
            $kosu = "";
        }
        ?>

        <?php

        require_once("saleData.php");
        $couponCode = "ha45as";
        $goodsID = "ax102";
        $discount = getCouponRate($couponCode);
        $tanka = getPrice($goodsID);
        if (is_null($discount) || is_null($tanka)) {
            $err = '<div class = "error>不正な操作がありました。</div>';
            exit($err);
        }

        ?>

        <?php

        $discount = 0.8;
        $off = (1 - $discount) * 100;
        if ($discount > 0) {
            echo "<h2>このページでのご購入は{$off}%OFFになります！</h2>";
        }

        $tanka = 2900;
        $tanka_fmt = number_format($tanka);
        ?>

        <form method="POST" action="discount.php">
            <input type="hidden" name="couponCode" value="<?php echo $couponCode; ?>">
            <input type="hidden" name="goodsID" value="<?php echo $goodsID; ?>">
            <ul>
                <li><label>単価:<?php echo $tanka_fmt; ?>円</label></li>
                <li><label>個数:<input type="number" name="kosu" value="<?php echo $kosu; ?>"></label></li>
                <li><input type="submit" value="送信"></li>
            </ul>
        </form>
    </div>
</body>

</html>