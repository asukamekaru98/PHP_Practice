<?php
require_once("../../lib/util.php")
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>SplFileObjectでcsvファイルを読み込む</title>
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/tablestyle.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php
        $filename = "mydata.csv";

        $csv_header = ["id", "名前", "年齢", "趣味"];

        $csv_data = [];
        $csv_data[] = ["a10", "高橋尚美", "36", "沢登り"];
        $csv_data[] = ["a11", "手塚雄一", "31", "トレラン"];
        $csv_data[] = ["a12", "戸高営利", "18", "料理"];
        $csv_data[] = ["a13", "迫田信二", "23", "ボルダリング"];
        $csv_data[] = ["a14", "山岡美波", "26", "サーフィン"];


        try {
            // 追記モードでメモファイルを開く
            $fileObj = new SplFileObject($filename, "wb");
        } catch (Exception $e) {
            echo '<span class="error">エラー有り</span><br>';
            echo $e->getMessage();
            exit();
        }

        $fileObj->fputcsv($csv_header);
        foreach ($csv_data as $value) {
            $fileObj->fputcsv($value);
        }
        echo "{$filename}の書き出しが終わりました";
        ?>
    </div>
</body>

</html>