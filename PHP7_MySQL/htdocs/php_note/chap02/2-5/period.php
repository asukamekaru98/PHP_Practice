<?php
$who = "青島";
$hello = "こんにちは";

$msg = $who . "さん。" . $hello;
echo  $msg;

$hello = "さようなら";
echo  $msg; // さようならで更新されない。ポインタじゃない。

$msg = $who . "さん。" . $hello;
echo  $msg;

++$who;
$hello++;
$msg = $who . "さん。" . $hello;
echo  $msg; //何も起こらない

?>