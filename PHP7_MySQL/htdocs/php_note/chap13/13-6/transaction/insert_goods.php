<?php
require_once("../../lib/util.php");
$gobackURL = "insertform.php";

if (!cken($_POST)) {
    header("Location:{$gobackURL}");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>レコード追加</title>
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/tablestyle2.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php
        if (!isset($_POST["id"]) || ($_POST["id"] === "")) {
            $error[] = "商品IDが空です";
        }
        if (!isset($_POST["name"]) || ($_POST["name"] === "")) {
            $error[] = "商品名が空です";
        }
        if (!isset($_POST["brand"]) || ($_POST["brand"] === "")) {
            $error[] = "ブランドが空です";
        }

        if (!isset($_POST["quantity"]) || (!ctype_digit($_POST["quantity"]))) {
            $error[] = "個数が整数ではありません";
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

        $user = 'inventoryuser';
        $password = 'pw4inventoryuser';

        $dbname = 'inventory';
        $host = 'localhost:8889';
        $dsn = "mysql:host={$host};dbname={$dbname};charset=utf8";

        try {
            // DBに接続
            $pdo = new PDO($dsn, $user, $password);
            // プリペアドステートメントのエミュレーションを無効化
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            // 例外がスローされるようにする
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo '<span class="error">エラー有り</span><br>';
            echo $e->getMessage();
            exit();
        }

        try {
            // DBに接続
            $pdo->beginTransaction();
            $sqll = "INSERT INTO goods(id,name,size,brand) VALUES(:id, :name, :size, :brand)";

            $sql2 = "INSERT INTO stock (goods_id, quantity) VALUES(:goods_id, :quantity)";

            $insertGoods = $pdo->prepare($sqll);
            $insertStock = $pdo->prepare($sql2);

            $insertGoods->bindValue(':id', $_POST["id"], PDO::PARAM_STR);
            $insertGoods->bindValue(':size', $_POST["size"], PDO::PARAM_STR);
            $insertGoods->bindValue(':name', $_POST["name"], PDO::PARAM_STR);
            $insertGoods->bindValue(':brand', $_POST["brand"], PDO::PARAM_STR);
            $insertStock->bindValue(':goods_id', $_POST["id"], PDO::PARAM_STR);
            $insertStock->bindValue(':quantity', $_POST["quantity"], PDO::PARAM_STR);

            $insertGoods->execute();
            $insertStock->execute();

            $pdo->commit();
            echo "商品データ/在庫データを追加しました";
        } catch (Exception $e) {
            $pdo->rollBack();
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