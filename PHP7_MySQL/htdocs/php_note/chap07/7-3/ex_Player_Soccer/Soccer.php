<?php
require_once("Playey.php");

class Soccer extends Player
{
    public function player()
    {
        echo "{$this->name}がシュート！", "<br>";
    }
}
