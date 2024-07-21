<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>フォーム入力</title>
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

        <?php
        $isError = false;


        if (isset($_POST['name'])) {
            //文字列の先頭と末尾から余計な空白を取り除く
            $name = trim($_POST['name']);

            //空白ならエラー
            if ($name === "") {
                $isError = true;
            }
        } else {
            //そもそも設定がなければエラー
            $isError = true;
        }
        ?>

        <?php if ($isError) : ?>
            <!--エラーのとき-->
            <span class="error">名前を入力してください</span>
            <form method="POST" action="nameCheckForm.php">
                <input type="submit" value="戻る">
            </form>
        <?php else : ?>
            <!--エラーないとき-->
            <span>
                こんにちは、<?php echo $name; ?>さん。
            </span>

        <?php endif; ?>


    </div>
</body>

</html>