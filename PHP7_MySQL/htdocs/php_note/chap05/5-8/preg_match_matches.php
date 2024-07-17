<?php
$pattern = "/佐.+子/u";

$subject = <<< "names"
佐藤有紀
佐藤ゆう子
塩田朋子
杉山香
names;

$result = preg_match($pattern, $subject, $matches);

if ($result === false) {
    echo "エラー", preg_last_error();
} elseif ($result == 0) {
    echo "マッチした値はありません。";
} else {
    echo "「", $matches[0], "」がみつかりました。";
}
