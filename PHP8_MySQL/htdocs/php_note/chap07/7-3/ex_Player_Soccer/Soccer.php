<?php
require_once("Player.php");

class Soccer extends Player
{
    public function player()
    {
        echo "{$this->name}がシュート！", "<br>";
    }
}
