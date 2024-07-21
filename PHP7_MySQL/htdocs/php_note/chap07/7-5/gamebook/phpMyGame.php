<?php
require_once("MyGame.php");

$myPlayer = new MyGame();
for ($i = 0; $i < 10; $i++) {
    $myPlayer->play();
    if (!$myPlayer->isAlive()) {
        break;
    }
}
echo "ゲーム終了", "<br>";
