<?php
$date = date("Y/n/j G:i:s", time());
$writedata = <<< "EOD"
ヒアドキュメントならば、
途中での改行や、
変数を使った文章が作れますね。
更新日：$date
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
            echo '<span class="error">エラーがありました</span>';
            $err = $e->getMessage();
            exit($err);
        }

        $written = $fileObj->fwrite($writedata);
        if ($written === FALSE) {
            echo '<span class="error">エラーがありました</span>';
        } else {
            echo "SplFileObjectのfwriteを使って、<br>{$filename}に{$written}バイト書き出しました。<hr>";
            echo '<a href="read_file.php">ファイルを読み込む</a>';
        }
        ?>
    </div>
</body>

</html>