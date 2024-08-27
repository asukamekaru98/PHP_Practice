<?php
require_once("../../../lib/util.php");
$gobackurl = "insertForm.html";

if (!cken($_POST)) {
    header("Location:{$gobackurl}");
    exit();
}

$errors = [];
if (!isset($_POST["name"]) || ($_POST["name"] === "")) {
    $errors["name"] = "名前を入力してください";
}
if (!isset($_POST["age"]) || (!ctype_digit($_POST["age"]))) {
    $errors["age"] = "年齢を入力してください";
}
if (!isset($_POST["sex"]) || !in_array($_POST["sex"], ["男", "女"])) {
    $errors["sex"] = "性別を入力してください";
}

if (count($errors) > 0) {
    echo '<ol class="error">';
    foreach ($errors as $error) {
        echo "<li>{$error}</li>";
    }
    echo '</ol>';
    echo "<hr>";
    echo "<a href='{$gobackurl}'>戻る</a>";
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
    <title>データ追加</title>
    <link href="../../../css/style.css" rel="stylesheet">
    <link href="../../../css/tablestyle.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php

        $name = $_POST["name"];
        $age = $_POST["age"];
        $sex = $_POST["sex"];

        try {
            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "データベース{$dbName}に接続しました";

            $sql = "INSERT INTO member (name, age, sex) VALUES (:name, :age, :sex)";

            $stm = $pdo->prepare($sql);
            $stm->bindValue(':name', $name, PDO::PARAM_STR);
            $stm->bindValue(':age', $age, PDO::PARAM_INT);
            $stm->bindValue(':sex', $sex, PDO::PARAM_STR);

            if ($stm->execute()) {

                $sql = "SELECT * FROM member";
                $stm = $pdo->query($sql);
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
            } else {
                echo '<span class="error">データ追加に失敗しました</span><br>';
            };
        } catch (Exception $e) {
            echo '<span class="error">エラー有り</span><br>';
            echo $e->getMessage();
        }
        ?>
        <hr>
        <p><a href="insertForm.html">戻る</a></p>
    </div>
</body>

</html>