<?php
class OrderManager
{
    private array $orderlist = [];

    //オーダー追加
    public function addOrder(array $items, array $allergys = [], string $memo = ""): void
    {
        $this->orderlist[] = new Order($items, $allergys, $memo);
    }

    // 
    public function nextOrder(): string
    {
        // 先頭のオーダーを取得
        $order = array_shift($this->orderlist);

        if ($order == null) {
            return "";
        }

        //日付取得
        $date = $order?->getDate();
        //Item取得
        $items = $order?->items;
        $items = ($items != null) ? implode("、", $items) : "";
        $orderdata = "{$date} {$items}";

        //アレルギー情報取得
        $info = $order->info;

        if ($info != null) {
            $allergys = $info->allergys;
            $memo = $info->memo;

            //アレルギー情報が存在すれば、「、」で区切った情報を出す。なければ空文
            $allergys = ($allergys != null) ? ("【アレルギー】" . implode("、", $allergys)) : "";
            //メモが存在すれば、メモを出す。なければ空文
            $memo = ($memo != null) ? "(メモ：{$memo})" : "";
            // くっつけて返す
            $orderdata = "{$date} {$items} {$allergys} {$memo}";
        }
        return $orderdata;
    }
}

class Order
{
    // 時間情報
    private DateTime $date; //外部からの読み込み不可

    public Info|null $info = null;

    //
    function __construct(public array $items, array $allergys, string $memo)
    {
        // オーダーの作成日取得
        $this->date = new DateTime();

        // アレルギー情報、もしくはメモがある場合に、Info設定
        if (($allergys != []) || ($memo != "")) {
            $this->info = new Info($allergys, $memo);
        }
    }

    // 作成日情報取得
    public function getDate(): string
    {
        return $this->date->format("Y/m/d H:i");
    }
}


class Info
{
    function __construct(public array $allergys = [], public string $memo = "") {}
}
