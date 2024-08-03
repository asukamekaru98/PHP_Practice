<?php
require_once("../../lib/util.php");

$user = 'inventoryuser';
$password = 'pw4inventoryuser';

$dbname = 'inventory';
$host = 'localhost:8889';
$dsn = "mysql:host={$host};dbname={$dbname};charset=utf8";
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>レコードを取り出す</title>
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/tablestyle2.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php

        try {
            // DBに接続
            $pdo = new PDO($dsn, $user, $password);
            // プリペアドステートメントのエミュレーションを無効化
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            // 例外がスローされるようにする
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //SQL文を作る
            $sql = "SELECT goods.id as goods_id, goods.name as goods_name, goods.size, brand.name as brand_name FROM goods, brand WHERE goods.brand = brand.id ORDER BY goods_id";

            //プリペアドステートメントを作る
            $stm = $pdo->prepare($sql);
            //SQL分を実行する
            $stm->execute();

            //結果の取得
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);

            if (count($result) > 0) {
                echo "名前に「{$name}」が含まれているレコード";

                echo "<table>";
                echo "<thead><tr>";
                echo "<th>", "ID", "</th>";
                echo "<th>", "商品", "</th>";
                echo "<th>", "サイズ", "</th>";
                echo "<th>", "ブランド", "</th>";
                echo "</tr></thead>";
                echo "<tbody>";

                foreach ($result as $row) {
                    echo "<tr>";
                    echo "<td>", es($row['goods_id']), "</td>";
                    echo "<td>", es($row['goods_name']), "</td>";
                    echo "<td>", es($row['size']), "</td>";
                    echo "<td>", es($row['brand_name']), "</td>";
                    echo "</tr>";
                }

                echo "</tbody>";
                echo "</table>";
            } else {
                echo "名前に「{$name}」は見つかりませんでした。";
            }
        } catch (Exception $e) {
            echo '<span class="error">エラー有り</span><br>';
            echo $e->getMessage();
            exit();
        }

        ?>
    </div>
</body>

</html>