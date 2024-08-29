<?php
require_once("../../../lib/util.php");

$goBackURL = "insertForm.php";

if (!cken($_POST)) {
    header("Location: {$goBackURL}");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>レコード追加</title>
    <link href="../../../css/style.css" rel="stylesheet">
    <link href="../../../css/tablestyle.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php

        $errors = [];
        if (!isset($_POST['id']) || $_POST['id'] === '') {
            $errors['id'] = '商品IDを入力してください';
        }
        if (!isset($_POST['name']) || $_POST['name'] === '') {
            $errors['name'] = '商品名を入力してください';
        }
        if (!isset($_POST['brand']) || $_POST['brand'] === '') {
            $errors['brand'] = 'ブランドを選択してください';
        }
        if (!isset($_POST['quantity']) || (!ctype_digit($_POST['quantity']))) {
            $errors['quantity'] = '個数を入力してください';
        }

        if (count($errors) > 0) {
            echo '<ol class="error">';
            foreach ($errors as $value) {
                echo "<li>{$value}</li>";
            }
            echo '</ol>';
            echo '<br>';
            echo "<a href=", $goBackURL, ">戻る</a>";
            exit();
        }

        $user = 'root';
        $password = '';
        $dbName = 'inventory';
        $host = 'localhost';

        $dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";


        try {
            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT id,name FROM brand";
            $prepare = $pdo->prepare($sql);
            $prepare->execute();
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            $err = '<span class="error">データベース接続に失敗しました</span>';
            $err .= $e->getMessage();
            exit();
        }

        try {
            $pdo->beginTransaction();

            $sql1 = "INSERT INTO goods (id, name, size, brand) VALUES (:id, :name, :size, :brand)";
            $sql2 = "INSERT INTO stock (goods_id, quantity) VALUES (:id, :quantity)";
            $prepare1 = $pdo->prepare($sql1);
            $prepare2 = $pdo->prepare($sql2);
            $prepare1->bindValue(':id', $_POST['id'], PDO::PARAM_STR);
            $prepare1->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
            $prepare1->bindValue(':size', $_POST['size'], PDO::PARAM_STR);
            $prepare1->bindValue(':brand', $_POST['brand'], PDO::PARAM_STR);
            $prepare2->bindValue(':id', $_POST['id'], PDO::PARAM_STR);
            $prepare2->bindValue(':quantity', $_POST['quantity'], PDO::PARAM_INT);

            $prepare1->execute();
            $prepare2->execute();

            $pdo->commit();
            echo "商品データ/在庫データを追加しました";
        } catch (Exception $e) {
            $pdo->rollBack();
            echo "<span class='error'>商品データ/在庫データを追加できませんでした</span>";
            echo $e->getMessage();
        }


        ?>
        <hr>
        <p><a href="<?php echo $goBackURL; ?>">戻る</a></p>
    </div>
</body>

</html>