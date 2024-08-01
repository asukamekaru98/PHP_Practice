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
        $filename = "makuranosoushi.txt";

        try {
            // 追記モードでメモファイルを開く
            $fileObj = new SplFileObject($filename, "rb");
        } catch (Exception $e) {
            echo '<span class="error">エラー有り</span><br>';
            echo $e->getMessage();
            exit();
        }

        // ファイルロック（共有ロック）
        $fileObj->flock(LOCK_SH);

        $fileObj->seek(3);
        echo $fileObj->Key(), ":", $fileObj->current(), "<br>";

        $fileObj->next();
        echo $fileObj->Key(), ":", $fileObj->current(), "<br>";

        // ファイルアンロック
        $fileObj->flock(LOCK_UN);
        ?>
    </div>
</body>

</html>