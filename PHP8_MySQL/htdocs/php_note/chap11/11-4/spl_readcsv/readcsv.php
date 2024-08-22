<?php
require_once("../../../lib/util.php")
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>SplFileObjectでcsvファイルを読み込む</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/tablestyle.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php
        $filename = "mydata.csv";

        try {
            $fileObj = new SplFileObject($filename, "rb");
        } catch (Exception $e) {
            echo '<span class="error">エラー有り</span><br>';
            echo $e->getMessage();
            exit();
        }

        $fileObj->setFlags(
            SplFileObject::READ_CSV |
                SplFileObject::READ_AHEAD |
                SplFileObject::SKIP_EMPTY |
                SplFileObject::DROP_NEW_LINE
        );

        echo "<table>";
        echo "<thead><tr>";
        echo "<th>", "ID", "</th>";
        echo "<th>", "商品名", "</th>";
        echo "<th>", "価格", "</th>";
        echo "</tr></thead>";

        echo "<tbody>";
        foreach ($fileObj as $row) {
            list($id, $name, $price) = $row;
            if ($price == "") {
                continue;
            }
            echo "<tr>";
            echo "<td>", es($id), "</td>";
            echo "<td>", es($name), "</td>";
            echo "<td>", es(number_format($price)), "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
        ?>
    </div>
</body>

</html>