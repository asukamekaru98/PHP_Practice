<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>フォーム入力</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>

        <form method="POST" action="warikan.php">
            <ul>
                <li><label>合計金額:<input type="number" name="goukei"></label></li>
                <li><label>人数:<input type="number" name="ninzu"></label></li>
                <li><input type="submit" value="割り勘する"></li>
            </ul>
        </form>
    </div>
</body>

</html>