<?php
$data = [23, 16, 8, 42, 15, 4];
$clone = $data;

sort($clone);


echo "元:";
print_r($data);

echo "複製:";
print_r($clone);
