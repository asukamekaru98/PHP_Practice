<?php
// クラスファイルを読み込む
require_once("OrderManager.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>OrderManagerクラスでオーダーする</title>
</head>

<body>
    <pre>
<?php
// OrderManagerクラスのインスタンスを作る
$theOrder = new OrderManager();
// オーダーを２つ追加する
$theOrder->addOrder(items: ["ワイン", "カルパッチョ"], allergys: ["ピーナッツ", "そば"]);
$theOrder->addOrder(items: ["ビール", "枝豆"], memo: "誕生日");

// 最初のオーダーを取り出して表示する
$orderstring = $theOrder->nextOrder();
echo ($orderstring . "<br>");
// 次のオーダーを取り出して表示する
$orderstring = $theOrder->nextOrder();
echo ($orderstring . "<br>");
// 次のオーダーを取り出して表示する（３つ目は空です）
$orderstring = $theOrder->nextOrder();
echo ($orderstring . "<br>");
?>
</pre>
</body>

</html>