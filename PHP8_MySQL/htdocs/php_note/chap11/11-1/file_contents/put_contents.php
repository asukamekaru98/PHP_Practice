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
        $result = touch($filename);
        if ($result) {
            file_put_contents($filename, $writedata, LOCK_EX);
            echo "{$filename}にデータを書き出しました。<hr>";
            echo '<a href="get_contents.php">ファイルを読み込む</a>';
        } else {
            echo '<span class="error">エラーがありました</span>';
        }

        ?>
    </div>
</body>

</html>