<?php
function team($name, ...$members)
{
    print_r($name . PHP_EOL);
    print_r($members);
}

team("Peach", "砂糖", "田中", "加藤");
