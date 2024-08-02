<?php
require_once("../../lib/util.php");

$user = 'testuser';
$password = 'pw4testuser';

$dbname = 'testdb';
$host = 'localhost:8889';
$dsn = "mysql:host={$host};dbname={$dbname};charset=utf8";

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>レコードを取り出す(AND)</title>
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/tablestyle.css" rel="stylesheet">
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
            echo "データベース{$dbname}に接続しました";

            //SQL文を作る
            $sql = "UPDATE member SET age = age + 1";
            //プリペアドステートメントを作る
            $stm = $pdo->prepare($sql);
            //SQL分を実行する
            $stm->execute();

            //SQL文を作る
            $sql = "SELECT * FROM member";
            //プリペアドステートメントを作る
            $stm = $pdo->prepare($sql);
            //SQL分を実行する
            $stm->execute();

            //結果の取得
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