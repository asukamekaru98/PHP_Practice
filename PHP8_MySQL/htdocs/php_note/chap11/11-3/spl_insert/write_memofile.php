<?php

if (empty($_POST["memo"])) {
    $url = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
    header("HTTP/1.1 303 See Other");
    header("Location:" . $url . "/input_memo.php");
    exit();
}

$memo = $_POST["memo"];
$date = date("Y/n/j G:i:s", time());
$newdata = $date . "   " . $memo;

try {
    $workingfileObj = new SplFileObject("working.tmp", "wb");
    $workingfileObj->flock(LOCK_EX);
    $workingfileObj->fwrite($newdata);
    $workingfileObj->flock(LOCK_UN);
} catch (Exception $e) {
    echo '<span class="error">エラーがありました</span><br>';
    echo $e->getMessage();
    exit();
}

$filename = "memo.txt";

if (file_exists($filename)) {
    $fileObj = new SplFileObject($filename, "rb");
    $fileObj->flock(LOCK_SH);
    $olddata = $fileObj->fread($fileObj->getSize());
    $fileObj->flock(LOCK_UN);

    $olddata = PHP_EOL . $olddata;
    $workingfileObj->flock(LOCK_EX);
    $workingfileObj->fwrite($olddata);
    $workingfileObj->flock(LOCK_UN);

    $fileObj = NULL;
    unlink($filename);
}

$workingfileObj = NULL;
rename("working.tmp", $filename);

$url = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
header("HTTP/1.1 303 See Other");
header("Location:" . $url . "/read_memofile.php");
exit();
