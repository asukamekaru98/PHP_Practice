<?php
require_once("../../lib/util.php");

$gamedata = ["name" => "マッキー", "age" => 19, "avatar" => "blue_snake", "level" => "a02wr215"];
$dataQueryString = array_queryString($gamedata);
$result = setcookie("gamedata", $dataQueryString, time() + 60 * 5);
?>

<?php
function array_queryString(array $variable)
{
    foreach ($variable as $key => $value) {
        $data[] = "{$key}={$value}";
    }

    $queryString = implode("&", $data);
    return $queryString;
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>クッキー保存ページ</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php
        if ($result) {
            echo "ゲームデータを保存しました", "<hr>";
            echo '<a href="check_cookie.php">クッキーを確認する</a>';
        } else {
            echo '<span class="error">クッキーが利用できませんでした！</span>';
        }

        ?>
    </div>
</body>

</html>