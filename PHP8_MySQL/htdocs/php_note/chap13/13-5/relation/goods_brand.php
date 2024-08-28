<?php
require_once("../../../lib/util.php");

$user = 'root';
$password = '';
$dbName = 'inventory';
$host = 'localhost';

$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>レコードを取り出す</title>
    <link href="../../../css/style.css" rel="stylesheet">
    <link href="../../../css/tablestyle.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php

        try {
            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "データベース{$dbName}に接続しました";

            $sql = "SELECT goods.id as goods_id, goods.name as goods_name,
             goods.size, brand.name AS brand_name 
             FROM goods ,brand
             WHERE goods.brand = brand.id
             ORDER BY goods.id";

            $prepare = $pdo->prepare($sql);
            $prepare->execute();
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);

            echo "<table>";
            echo "<thead><tr>";
            echo "<th>", "商品ID", "</th>";
            echo "<th>", "商品名", "</th>";
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
        } catch (Exception $e) {
            echo '<span class="error">エラーがありました</span><br>';
            echo $e->getMessage();
            exit();
        }
        ?>
    </div>
</body>

</html>