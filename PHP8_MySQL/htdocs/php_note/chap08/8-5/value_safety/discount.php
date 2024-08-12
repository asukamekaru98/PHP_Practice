<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>金額の計算</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php
        require_once("../../lib/util.php");
        if (!cken($_POST)) {
            $encoding = mb_internal_encoding();
            $err = "Encoding Error!" . $encoding;
            exit($err);
        }
        $_POST = es($_POST);
        ?>

        <?php

        $errors = [];
        if (isset($_POST['couponCode'])) {
            $couponCode = $_POST['couponCode'];
        } else {
            $couponCode = "";
        }

        if (isset($_POST['goodsID'])) {
            $goodsID = $_POST['goodsID'];
        } else {
            $goodsID = "";
        }

        ?>

        <?php
        require_once("saleData.php");
        $discount = getCouponRate($couponCode);
        $tanka = getPrice($goodsID);

        if (is_null($discount) || is_null($tanka)) {
            $err = '<div class = "error>不正な操作がありました。</div>';
            exit($err);
        }

        $errors = [];
        ?>

        <?php

        if (isset($_POST['kosu'])) {
            $kosu = $_POST['kosu'];
            if (!ctype_digit($kosu)) {
                $errors[] = "個数を整数で入力してください。";
            }
        } else {
            $errors[] = "個数が未設定です。";
        }
        ?>

        <?php
        if (count($errors) > 0) {
            echo '<ol class = "error">';
            foreach ($errors as $value) {
                echo "<li>", $value, "</li>";
            }
            echo "</ol>";
        } else {
            $price = $tanka * $kosu;
            $discount_price = floor($price * $discount);
            $off_price = $price - $discount_price;
            $off_per = (1 - $discount) * 100;
            $tanka_fmt = number_format($tanka);
            $discount_price_fmt = number_format($discount_price);
            $off_price_fmt = number_format($off_price);

            echo "単価：{$tanka_fmt}円、", "個数：{$kosu}個", "<br>";
            echo "金額：{$discount_price_fmt}円、", "<br>";
            echo "(割引：-{$off_price_fmt}円、{$off_per}% OFF)", "<br>";
        }
        ?>

        <form method="POST" action="discountForm.php">

            <input type="hidden" name="kosu" value="<?php echo $kosu; ?>">
            <ul>
                <li><input type="submit" value="戻る"></li>
            </ul>
        </form>
    </div>
</body>

</html>