<?php
$date = date("Y/n/j G:i:s", time());
$writedata = <<< "EOD"
ヒアドキュメントならば、
途中で改行したり、
変数をつかた文章が作れますね。
更新日:$date
EOD;
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>SplFileObjectでファイルに保存</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>

        <?php
        $filename = "mytext.txt";
        try {
            $fileObj = new SplFileObject($filename, "wb");
        } catch (Exception $e) {
            echo '<span class="error">エラーが有りました。</span><br>';
            echo $e->getMessage();
            exit();
        }

        $written = $fileObj->fwrite($writedata);
        if ($written === FALSE) {
            echo '<span class="error">ファイルに保存できませんでした。</span><br>';
        } else {
            echo "SplFileObjectのfwriteを使って、<br>{$filename}に{$written}バイトを書き出しました", "<hr>";
            echo '<a href="read_file.php">ファイルを読む</a>';
        }
        ?>

    </div>
</body>

</html>