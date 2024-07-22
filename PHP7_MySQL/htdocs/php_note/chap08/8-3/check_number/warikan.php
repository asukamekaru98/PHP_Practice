<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>割り勘計算</title>
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
        if (isset($_POST['goukei'])) {
            $goukei = $_POST['goukei'];

            //0以上の整数であるか確認
            if (!ctype_digit($goukei)) {
                $errors[] = "合計金額を整数で入力してください。";
            }
        } else {
            //そもそも設定がなければエラー
            $errors[] = "合計金額が未設定です。";
        }

        if (isset($_POST['ninzu'])) {
            $ninzu = $_POST['ninzu'];

            //0以上の整数であるか確認
            if (!ctype_digit($ninzu)) {
                $errors[] = "人数を整数で入力してください。";
            } else if ($ninzu == 0) {
                $errors[] = "0人";
            }
        } else {
            //そもそも設定がなければエラー
            $errors[] = "人数が未設定です。";
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
        }
        ?>

        <form method="POST" action="warikanForm.php">
            <ul>
                <li><input type="submit" value="戻る"></li>
            </ul>
        </form>

        <?php
        if (count($errors) == 0) {
            $amari = $goukei % $ninzu;
            $price = ($goukei - $amari) / $ninzu;

            $goukei_fmt = number_format($goukei);
            $price_fmt = number_format($price);

            echo "{$goukei_fmt}円を{$ninzu}人で割り勘します。", "<br>";
            echo "一人当たり{$price_fmt}円を支払えば、不足分は{$amari}円です";
        }

        ?>


    </div>
</body>

</html>