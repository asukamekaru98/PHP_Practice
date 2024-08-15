<?php
session_start();    // セッション開始
require_once("../../../lib/util.php");

if (empty($_SESSION['name'])) {
    $name = "";
} else {
    $name = $_SESSION['name'];
}

if (empty($_SESSION['kotoba'])) {
    $kotoba = "";
} else {
    $kotoba = $_SESSION['kotoba'];
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>入力ページ</title>
    <link href="../../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        アンケート(1/2)<br>
        <form method="POST" action="dogcat.php">
            <li><label>名前：
                    <input type="text" name="name" placeholder="ニックネーム可" value="<?php echo es($name) ?>" ;>
                </label></li>
            <li><label>好きな言葉：
                    <input type="text" name="kotoba" value="<?php echo es($kotoba) ?>" ;>
                </label></li>
            <li><input type="submit" value="次へ"></li>
        </form>
    </div>
</body>

</html>