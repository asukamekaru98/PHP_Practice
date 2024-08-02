<?php
function es($data, $charset = 'UTF-8')
{
    if (is_array($data)) {
        return array_map(__METHOD__, $data);
    } else {
        //
        return htmlspecialchars($data, ENT_QUOTES, $charset);
    }
}

function cken(array $data)
{
    $result = true;

    foreach ($data as $key => $value) {

        //配列の要素がさらに配列である場合、その配列のすべての要素を連結して1つの文字列 $value にする
        if (is_array($value)) {
            $value = implode("", $value);
        }

        //現在の文字列 $value が有効なエンコーディングであるかどうかを確認
        if (!mb_check_encoding($value)) {
            $result = false;
            break;
        }
    }
    return $result;
}
