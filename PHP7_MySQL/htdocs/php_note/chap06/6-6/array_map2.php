<?php
function listUp($value1, $value2)
{
    echo "<li>", $value1, "--", $value2, "</li>", "<br>";
}

$point = ["10km", "20km", "30km", "40km", "Goal"];
$split = ["00:50:37", "01:39:15", "02:28:25", "03:21:37", "03:34:44"];
echo "<ul>", "<br>";
array_map("listUp", $point, $split);
echo "</ul>";
