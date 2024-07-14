<?php
$page = "PHP 7サンプル.html";
$path = rawurldecode($page);
$url = "http://sample.com/{$path}";
echo $url;
