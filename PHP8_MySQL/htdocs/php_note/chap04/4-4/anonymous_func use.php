<?php
$msg = "ありがとう";
$myFunc = function ($who) use ($msg) {
    echo "{$who}さん、" . $msg, PHP_EOL;
};

$msg = "さようなら";

$myFunc("田中");
$myFunc("佐藤");
