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

        $discount = 0.8;
        $off = (1 - $discount) * 100;
        if ($discount > 0) {
            echo "<h2>このページでのご購入は{$off}%OFFになります！</h2>";
        }

        $tanka = 2900;
        $tanka_fmt = number_format($tanka);
        ?>

        <form method="POST" action="discount.php">
            <input type="hidden" name="discount" value="<?php echo $discount; ?>">
            <input type="hidden" name="tanka" value="<?php echo $tanka; ?>">
            <ul>
                <li><label>単価:<?php echo $tanka_fmt; ?>円</label></li>
                <li><label>個数:<input type="number" name="kosu"></label></li>
                <li><input type="submit" value="送信"></li>
            </ul>
        </form>
    </div>
</body>

</html>