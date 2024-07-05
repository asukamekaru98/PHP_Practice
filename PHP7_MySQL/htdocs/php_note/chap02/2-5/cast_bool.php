<?php
$theDate = new DateTime();
$isAccess = (bool)$theDate;
var_dump($isAccess);    //0以外の値が入っていれば、True