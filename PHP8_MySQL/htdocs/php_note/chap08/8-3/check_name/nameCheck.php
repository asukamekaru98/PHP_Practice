<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>フォーム入力チェック</title>
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
        $isError = false;

        if (isset($_POST['name'])) {
            $name = trim($_POST['name']);

            if ($name === "") {
                $isError = true;
            }
        } else {
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
            <span>
                こんにちは、<?php echo $name; ?>さん。
            </span>

        <?php endif; ?>
    </div>
</body>

</html>