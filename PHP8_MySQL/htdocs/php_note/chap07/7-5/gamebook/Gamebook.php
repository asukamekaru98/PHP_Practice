<?php
interface GameBook
{
    function newGame(int $point);   //この関数には引数が1個ある
    function play();
    function isAlive(): bool;   //戻り値がboolでなければならない
}
