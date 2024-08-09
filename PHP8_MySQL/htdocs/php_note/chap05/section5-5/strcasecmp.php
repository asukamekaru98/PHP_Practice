<?php
$id1 = "AB12R";
$id2 = "ab12r";

$result = strcasecmp($id1, $id2);
echo "{$id1}と{$id2}を比較した結果、";

if ($result == 0) {
    echo "一致しました";
} else {
    echo "一致しません";
}
