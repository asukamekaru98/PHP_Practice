<?php
$msg = "    東京都千代田区 <br><br>";
$result = trim($msg, "\x20\t\n\r\0\v");
echo "処理前:<br>";
echo "[", $msg, "]<br>";
echo "処理後:<br>";
echo "[", $result, "]<br>";
