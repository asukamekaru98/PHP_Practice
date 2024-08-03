<?php
require_once("../../lib/util.php");
$gobackURL = "insertform.html";

if (!cken($_POST)) {
    header("Location:{$gobackURL}");
    exit();
}

$error = [];

if (!isset($_POST["name"]) || ($_POST["name"] === "")) {
    $error[] = "名前がからです";
}

if (!isset($_POST["age"]) || (!ctype_digit($_POST["age"]))) {
    $error[] = "年齢には数字を入れてください";
}

if (!isset($_POST["sex"]) || (!in_array($_POST["sex"], ["男", "女"]))) {
    $error[] = "性別が男または女ではありません";
}

if (count($errors) > 0) {
    echo '<ol class="error">';
    foreach ($error as $value) {
        echo "<li>", $value, "</li>";
    }

    echo "</ol>";
    echo "<hr>";
    echo "<a href=", $gobackURL, ">戻る</a>";
}

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
    <title>レコード追加</title>
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/tablestyle.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php
        $name = $_POST["name"];
        $age = $_POST["age"];
        $sex = $_POST["sex"];

        try {
            // DBに接続
            $pdo = new PDO($dsn, $user, $password);
            // プリペアドステートメントのエミュレーションを無効化
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            // 例外がスローされるようにする
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //SQL文を作る
            $sql = "INSERT INTO member (name,age,sex) VALUES(:name,:age,:sex)";

            //プリペアドステートメントを作る
            $stm = $pdo->prepare($sql);
            $stm->bindValue(':name', "%{$name}%", PDO::PARAM_STR);
            $stm->bindValue(':age', "%{$age}%", PDO::PARAM_INT);
            $stm->bindValue(':sex', "%{$sex}%", PDO::PARAM_STR);

            //SQL分を実行する
            if ($stm->execute()) {
                $sql = "SELECT * FROM member";
                $stm = $pdo->prepare($sql);
                $stm->execute();

                //結果の取得
                $result = $stm->fetchAll(PDO::FETCH_ASSOC);

                echo "名前に「{$name}」が含まれているレコード";

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
                echo '<span calss="error">追加エラーあり</span></br>';
            }
        } catch (Exception $e) {
            echo '<span class="error">エラー有り</span><br>';
            echo $e->getMessage();
            exit();
        }

        ?>
        <hr>
        <p><a href="<?php echo $gobackURL ?>">戻る</a></p>
    </div>
</body>

</html>