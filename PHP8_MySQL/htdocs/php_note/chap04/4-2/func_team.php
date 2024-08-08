<?php
function team($name, ...$members)
{
    print_r($name . PHP_EOL);
    print_r($members);
}

team("Peach", "佐藤", "田中", "加藤");
