<?php
require_once("../../../lib/util.php");

$user = 'root';
$password = '';
$dbName = 'testdb';
$host = 'localhost';

$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>レコードを取り出す(プレースホルダを使う)</title>
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
            echo "データベース{$dbname}に接続しました";

            $sql = "SELECT * FROM member WHERE age >= :min AND age <= :max AND sex = :sex";

            $stm = $pdo->prepare($sql);
            $stm->bindValue(':min', 25, PDO::PARAM_INT);
            $stm->bindValue(':max', 40, PDO::PARAM_INT);
            $stm->bindValue(':sex', '男', PDO::PARAM_STR);

            $stm->execute();
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);

            echo "<table>";
            echo "<thead><tr>";
            echo "<th>", "ID", "</th>";
            echo "<th>", "名前", "</th>";
            echo "<th>", "年齢", "</th>";
            echo "<th>", "性別", "</th>";
            echo "</tr></thead>";
            echo "<tbody>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>", es($row['id']), "</td>";
                echo "<td>", es($row['name']), "</td>";
                echo "<td>", es($row['age']), "</td>";
                echo "<td>", es($row['sex']), "</td>";
                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
        } catch (Exception $e) {
            echo '<span class="error">エラー有り</span><br>';
            echo $e->getMessage();
            exit();
        }
        ?>
    </div>
</body>

</html>