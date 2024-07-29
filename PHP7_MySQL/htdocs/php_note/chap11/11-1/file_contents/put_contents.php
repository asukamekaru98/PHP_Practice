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
    <title>SplFileObjectでファイルを読み込む</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>



<body>
    <div>

        <?php
        $filename = "mytext.txt";
        $result = touch($filename);

        if ($result) {
            file_put_contents($filename, $writedata, LOCK_EX);
            echo "{$filename}にデータを書き込みました。", "<hr>";
            echo '<a href="get_contents.php">ファイルを読み込む</a>';
        } else {
            echo '<span class="error">ファイルに保存できませんでした。</span>';
        }
        ?>

    </div>
</body>

</html>