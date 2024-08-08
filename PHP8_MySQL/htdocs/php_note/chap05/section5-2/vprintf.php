<?php
$max = 15.69;
$min = 11.32;
$ave = 13.218;

$data = array($max, $min, $ave);
$format = 'MAX%.1f,MIN%.1f,AVG%.1f';
vprintf($format, $data);
