<?php
$id = "Peace";
$length = strlen($id);
for ($i = 0; $i < $length; $i++) {
    $chr = $id[$i];
    echo "{$i}-", $chr, "<br>";
}
