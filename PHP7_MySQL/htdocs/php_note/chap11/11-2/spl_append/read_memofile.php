<?php
require_once("../../lib/util.php")
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>メモの読み込む</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php
        $filename = "memo.txt";

        try {
            // 追記モードでメモファイルを開く
            $fileObj = new SplFileObject($filename, "rb");
        } catch (Exception $e) {
            echo '<span class="error">エラー有り</span><br>';
            echo $e->getMessage();
            exit();
        }

        // ファイルロック（排他ロック）
        $fileObj->flock(LOCK_SH);
        // メモ追記
        $readdata = $fileObj->fread($fileObj->getSize());
        // ファイルアンロック
        $fileObj->flock(LOCK_UN);

        if (!($readdata === FALSE)) {
            $readdata = es($readdata);
            $readdata_br = nl2br($readdata, false);
            echo "{$filename}を読み込みました", "<br>";
            echo $readdata_br, "<hr>";
            echo '<a href="input_memo.php">メモ入力ページへ</a>';
        } else {
            echo '<span class="error">エラー有り</span><br>';
        }

        ?>
    </div>
</body>

</html>