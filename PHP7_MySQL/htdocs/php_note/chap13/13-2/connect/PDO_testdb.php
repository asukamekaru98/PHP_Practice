<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>PDOでデータベースに接続する</title>
</head>

<body>
    <div>
        <?php

        $user = 'testuser';
        $password = 'pw4testuser';

        $dbname = 'testdb';
        $host = 'localhost:8889';
        $dsn = "mysql:host={$host};dbname={$dbname};charset=utf8";

        try {
            // DBに接続
            $pdo = new PDO($dsn, $user, $password);
            // プリペアドステートメントのエミュレーションを無効化
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            // 例外がスローされるようにする
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // 追記モードでメモファイルを開く
            echo "データベース{$dbname}に接続しました";
        } catch (Exception $e) {
            echo '<span class="error">エラー有り</span><br>';
            echo $e->getMessage();
            exit();
        }
        ?>
    </div>
</body>

</html>