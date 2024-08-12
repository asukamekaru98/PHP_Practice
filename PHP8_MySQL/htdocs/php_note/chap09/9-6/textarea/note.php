<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>テキストエリア</title>
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
        ?>

        <?php
        if (isset($_POST["note"])) {
            $note = $_POST["note"];
            $note = strip_tags($note);
            $note = mb_substr($note, 0, 150);
            $note = es($note);
        } else {
            $note = "";
        }
        ?>

        <form method="POST" action="<?php echo es($_SERVER['PHP_SELF']); ?>">
            <ul>
                <li><span>ご意見：</span>
                    <textarea name="note" cols="30" rows="5" maxlength="150" placeholder="コメントをどうぞ">
                    <?php echo $note ?>
                    </textarea>
                </li>
                <li><input type="submit" value="送信する"></li>
            </ul>
        </form>

        <?php
        if (mb_strlen($note) > 0) {
            echo "<HR>";
            $note_br = nl2br($note, false);
            echo $note_br;
        }
        ?>

    </div>
</body>

</html>