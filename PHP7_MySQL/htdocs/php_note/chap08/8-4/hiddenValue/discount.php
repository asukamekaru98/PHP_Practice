<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>金額の計算</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>

        <!--文字エンコード検証処理-->
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

        <!--エラーメッセージ入力配列-->
        <?php
        $errors = [];
        ?>

        <!--合計金額チェック-->
        <?php
        if (isset($_POST['discount'])) {
            $discount = $_POST['discount'];

            if (!is_numeric($discount)) {
                $errors[] = "割引率がおかしい";
            }
        } else {
            //そもそも設定がなければエラー
            $errors[] = "割引率が未設定です。";
        }

        if (isset($_POST['tanka'])) {
            $tanka = $_POST['tanka'];

            //0以上の整数であるか確認
            if (!ctype_digit($tanka)) {
                $errors[] = "単価を整数で入力してください。";
            }
        } else {
            //そもそも設定がなければエラー
            $errors[] = "単価が未設定です。";
        }

        if (isset($_POST['kosu'])) {
            $kosu = $_POST['kosu'];

            //0以上の整数であるか確認
            if (!ctype_digit($kosu)) {
                $errors[] = "個数を整数で入力してください。";
            }
        } else {
            //そもそも設定がなければエラー
            $errors[] = "個数が未設定です。";
        }
        ?>

        <!--エラー有りのときの処理-->
        <?php
        if (count($errors) > 0) {
            echo '<ol class = "error">';
            foreach ($errors as $value) {
                echo "<li>", $value, "</li>";
            }
            echo "</ol>";
        } else {
            // エラー無い時（端数切り捨て）
            $price = $tanka * $kosu;
            $discount_price = floor($price * $discount);
            $off_price = $price - $discount_price;
            $off_per = (1 - $discount) * 100;

            //3桁位取り
            $tanka_fmt = number_format($tanka);
            $discount_price_fmt = number_format($discount_price);
            $off_price_fmt = number_format($off_price);

            //表示
            echo "単価：{$tanka_fmt}円、", "個数：{$kosu}個", "<br>";
            echo "金額：{$discount_price_fmt}円、", "<br>";
            echo "(割引：-{$off_price_fmt}円、{$off_per}% OFF)", "<br>";
        }
        ?>

        <form method="POST" action="discountForm.php">
            <ul>
                <li><input type="submit" value="戻る"></li>
            </ul>
        </form>
    </div>
</body>

</html>