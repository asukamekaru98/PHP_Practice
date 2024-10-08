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
        $errors = [];
        if (isset($_POST['zip'])) {
            $zip = trim($_POST['zip']);
            $pattern = "/^[0-9]{3}-[0-9]{4}$/";
            if (!preg_match($pattern, $zip)) {
                $errors[] = "郵便番号を正しく入力してください。";
            }
        } else {
            $errors[] = "郵便番号を正しく入力してください。";
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
            echo "郵便番号は{$zip}です。";
        }
        ?>

        <form method="POST" action="zipCheckForm.php">
            <ul>
                <li><input type="submit" value="戻る"></li>
            </ul>
        </form>

    </div>
</body>

</html>