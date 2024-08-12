<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>フォーム入力処理の基本(POST)</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <form method="POST" action="calc.php">
            <ul>
                <li><label>単価:<input type="number" name="tanka"></label></li>
                <li><label>個数:<input type="number" name="kosu"></label></li>
                <li><input type="submit" value="計算する"></li>
            </ul>
        </form>
    </div>
</body>

</html>