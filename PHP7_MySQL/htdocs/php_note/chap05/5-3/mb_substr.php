<?php
$msg = "吾輩は猫である。名前はまだない。";
echo mb_strlen($msg),"<br>";
echo mb_substr($msg,4),"<br>";
echo mb_substr($msg,4,10),"<br>";
echo mb_substr($msg,-6);