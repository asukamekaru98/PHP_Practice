<?php
require_once("../../lib/util.php")
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>SplFileObjectでファイルを読み込む</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>



<body>
    <div>

        <?php
        $FILE_OPEN_MODE_RB = "rb";
        $filename = "mytext.txt";
        try {
            $fileObj = new SplFileObject($filename, $FILE_OPEN_MODE_RB);
        } catch (Exception $e) {
            echo '<span class="error">エラーが有りました。</span><br>';
            echo $e->getMessage();
            exit();
        }

        $readdata = $fileObj->fread($fileObj->getSize());
        if (!($readdata === FALSE)) {
            $readdata = es($readdata);
            $readdata_br = nl2br($readdata, false);
            echo "{$filename}を読み込みました", "<br>";
            echo $readdata_br, "<hr>";
            echo '<a href="write_file.php">ファイルに書き込む</a>';
        } else {
            echo '<span class="error">ファイルを読み込めませんでした。</span>';
        }
        ?>

    </div>
</body>

</html>