<?php
require_once("../../lib/util.php");
$gobackURL = "insertform.html";

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

    //SQL文を作る
    $sql = "SELECT id, name FROM brand";

    //プリペアドステートメントを作る
    $stm = $pdo->prepare($sql);
    //SQL分を実行する
    $stm->execute();

    //結果の取得
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo '<span class="error">エラー有り</span><br>';
    echo $e->getMessage();
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
        <form method="POST" action="insert_goods.php">
            <ul>
                <li>
                    <label>商品ID:
                        <input type="text" name="id" placeholder="商品ID">
                    </label>
                </li>

                <li>
                    <label>商品名:
                        <input type="text" name="name" placeholder="商品名">
                    </label>
                </li>

                <li>
                    <label>サイズ:
                        <input type="text" name="size" placeholder="(未入力でもいいよ～)">
                    </label>
                </li>

                <li>ブランド：
                    <select name="brand">
                        <?php
                        foreach ($brand as $row) {
                            echo '<option value = "', $row["id"], '">', $row["name"], "</option>";
                        }
                        ?>
                    </select>
                </li>

                <li>
                    <label>個数:
                        <input type="number" name="quantity" placeholder="半角数字">
                </li>

                <li><input type="submit" value="追加する"></li>
            </ul>
        </form>
    </div>
</body>

</html>