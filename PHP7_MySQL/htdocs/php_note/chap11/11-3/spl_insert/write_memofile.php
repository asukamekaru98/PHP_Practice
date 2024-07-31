<?php
//POSTされたテキスト文を取り出す。
if (empty($_POST["memo"])) {
    // POSTされた値が無い時。
    // リダイレクト、入力ページへ戻る。
    $url = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
    header("HTTP/1.1 303 See Other");
    header("Location:" . $url . "/input_memo.php");
    exit();
}

// テキスト文取得
$memo = $_POST["memo"];
//時間取得
$date = date("Y/n/j G:i:s", time());
$newdata = $date . " " . $memo;
try {
    $workingfileObj = new SplFileObject("working.tmp", "wb");
    // ファイルロック（排他ロック）
    $workingfileObj->flock(LOCK_EX);
    // メモ追記
    $workingfileObj->fwrite($newdata);
    // ファイルアンロック
    $workingfileObj->flock(LOCK_UN);
} catch (Exception $e) {
    echo '<span class="error">エラー有り</span><br>';
    echo $e->getMessage();
    exit();
}

//$writedata = "---\n" . $date . "\n" . $memo . "\n";
$filename = "memo.txt";

if (file_exists($filename)) {
    $fileObj = new SplFileObject($filename, "rb");
    // ファイルロック（共有ロック）
    $fileObj->flock(LOCK_SH);
    // メモ追記
    $olddata = $fileObj->fread($fileObj->getSize());
    // ファイルアンロック
    $fileObj->flock(LOCK_UN);


    $olddata = "\n" . $olddata;
    // ファイルロック（排他ロック）
    $workingfileObj->flock(LOCK_EX);
    // メモ追記
    $workingfileObj->fwrite($olddata);
    // ファイルアンロック
    $workingfileObj->flock(LOCK_UN);

    $fileObj = NULL;
    unlink($filename);
}

$workingfileObj = NULL;
unlink($filename);

try {
    // 追記モードでメモファイルを開く
    $fileObj = new SplFileObject($filename, "a+b");
} catch (Exception $e) {
    echo '<span class="error">エラー有り</span><br>';
    echo $e->getMessage();
    exit();
}
// ファイルロック（排他ロック）
$fileObj->flock(LOCK_EX);
// メモ追記
$result = $fileObj->fwrite($writedata);
// ファイルアンロック
$fileObj->flock(LOCK_UN);

// リダイレクト（メモを読むページへ。）
$url = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
header("Location:" . $url . "/read_memofile.php");
exit();
