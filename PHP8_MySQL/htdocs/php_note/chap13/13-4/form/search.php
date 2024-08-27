<?php
require_once("../../../lib/util.php");
$gobackurl = "searchForm.html";

if (!cken($_POST)) {
    header("Location:{$gobackurl}");
    exit();
}

if (empty($_POST)) {
    header("Location:{$gobackurl}");
    exit();
} else if (!isset($_POST["name"]) || ($_POST["name"] === "")) {
    header("Location:{$gobackurl}");
    exit();
}

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
    <title>名前検索</title>
    <link href="../../../css/style.css" rel="stylesheet">
    <link href="../../../css/tablestyle.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php

        $name = $_POST["name"];

        try {
            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "データベース{$dbName}に接続しました";

            $sql = "SELECT * FROM member WHERE name LIKE :name";

            $stm = $pdo->prepare($sql);
            $stm->bindValue(':name', "%{$name}%", PDO::PARAM_STR);

            $stm->execute();
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);

            if (count($result) === 0) {
                echo "<p>該当するデータがありません</p>";
            } else {
                echo "名前に「{$name}」が含まれるデータを検索しました";
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