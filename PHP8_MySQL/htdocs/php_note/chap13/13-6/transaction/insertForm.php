<?php
require_once("../../../lib/util.php");
$gobackURL = "insertForm.php";

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
    <form action="insert_goods.php" method="post">
        <ul>
            <li>
                <label>商品ID:
                    <input type="text" name="id" size="30" maxlength="30" placeholder="商品IDを入力してください">
                </label>
            </li>
            <li>
                <label>商品名:
                    <input type="text" name="name" size="30" maxlength="30" placeholder="商品名を入力してください">
                </label>
            </li>
            <li>
                <label>サイズ:
                    <input type="text" name="size" size="30" maxlength="30" placeholder="サイズを入力してください">
                </label>
            </li>
            <li>
                <label>ブランド:</label>
                <select name="brand">
                    <?php
                    foreach ($result as $row) {
                        echo "<option value={$row['id']}>{$row['name']}</option>";
                    }
                    ?>

                </select>
            </li>
            <li>
                <label>個数:
                    <input type="number" name="quantity" size="30" maxlength="30" placeholder="個数を入力してください">
                </label>
            </li>
            <li><input type="submit" value="追加する"></li>
        </ul>
    </form>
</body>

</html>