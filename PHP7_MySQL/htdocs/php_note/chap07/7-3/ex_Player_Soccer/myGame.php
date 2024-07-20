<?php
require_once("Soccer.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>クラスを利用する</title>
</head>

<body>
    <pre>
    <?php

    $player1 = new Soccer("シンジ");
    $player1->who();
    $player1->player();
    ?>

    <?php
    $player2 = new Soccer("つばさ");
    echo "{$player2}";
    ?>
    </pre>
</body>

</html>