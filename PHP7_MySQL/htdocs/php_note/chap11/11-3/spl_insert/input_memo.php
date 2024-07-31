<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>1行メモの入力</title>
    <link href="../../css/style.css" rel="stylesheet">
    <style type="text/css">
        input.memofeld {
            width: 300px;
        }
    </style>
</head>

<body>
    <div>
        <form method="POST" action="write_memofile.php">
            <ul>
                <li><label>memo:<input name="memo" class="memofield" placeholder="メモを書く"></input></label></li>
                <li><input type="submit" value="送信する"></li>
            </ul>
        </form>
    </div>
</body>

</html>