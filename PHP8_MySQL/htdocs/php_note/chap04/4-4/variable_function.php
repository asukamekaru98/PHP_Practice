<?php
function hello($who)
{
    echo "{$who}さん、こんにちは";
}
function bye($who)
{
    echo "{$who}さん、さようなら";
}

$msg = "bye";
if (function_exists($msg)) {
    $msg("金太郎");
}
