<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>計算ページ</title>
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

        // ポストの有無で、初めてページを開いたか確認できる。
        if (isset($_POST['mile'])) {

            // ポストの確認
            $isNum = is_numeric($_POST["mile"]);
            if ($isNum) {
                $mile = $_POST["mile"];
                $error = "";
            } else {
                $mile = "";
                $error = '<span class = "error">←値を入力してください</span>';
            }
        } else {
            $isNum = false;
            $mile = "";
            $error = "";
        }
        ?>

        <form method="POST" action="<?php echo es($_SERVER['PHP_SELF']); ?>">
            <ul>
                <li>
                    <label>マイルをkmに変換:
                        <input type="text" name="mile" value="<?php echo $mile ?>">
                    </label>
                    <?php echo $error; ?>
                </li>
                <li><input type="submit" value="計算する"></li>
            </ul>
        </form>
        <?php
        if ($isNum) {
            echo "<HR>"; //線
            $kilometer = $mile * 1.609344;
            echo "{$mile}マイルは{$kilometer}kmです";
        }
        ?>
    </div>
</body>

</html>