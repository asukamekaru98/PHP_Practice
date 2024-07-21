<?php
interface GameBook
{
    function newGame($point);
    function play();
    function isAlive(): bool;
}
