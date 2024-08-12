<?php
require_once("MyGame.php");

$myPlayer = new MyGame(coins: 3);
for ($i = 0; $i < 10; $i++) {
    $kai = $i + 3;
    echo "<br>{$kai}回目";
    $myPlayer->play();
    if (!$myPlayer->isAlive()) {
        break;
    }
}
echo "ゲーム終了<br>";
