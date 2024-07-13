<?php
$max = 15.69;
$min = 11.32;
$ave = 13.218;

$data = array($max,$min,$ave);
$format = '最大値%.1f,最小値%.1f,平均値%.1f';
vprintf($format,$data);