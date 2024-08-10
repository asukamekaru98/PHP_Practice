<?php
$point = ["10km", "20km", "30km", "40km", "Goal"];
$split = ["00:50:37", "01:39:15", "02:28:25", "03:21:37", "03:34:44"];
$result = array_combine($point, $split);
print_r($result);
