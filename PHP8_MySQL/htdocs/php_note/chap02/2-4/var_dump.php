<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>vardumpの出力</title>
    <link href="./css/style.css" rel="stylesheet" type="text/css">
</head>

<?php

$msg = "おはよう";
$colors = array("red", "bkue", "green");
$now = new DateTime();
$tokuten = 45;
$isPass = ($tokuten > 80);
$userName;

var_dump($msg);
var_dump($colors);
var_dump($now);
var_dump($tokuten);
var_dump($isPass);
var_dump($userName);

?>
</body>

</html>