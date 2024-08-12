<?php
$couponList = ["nf23qw" => 0.75, "ha45as" => 0.8, "hf56zx" => 8.5];
$priceList = ["ax101" => 2300, "ax102" => 2900];

function getCouponRate($code)
{
    global $couponList;
    $isCouponCode = array_key_exists($code, $couponList);
    if ($isCouponCode) {
        return $couponList[$code];
    } else {
        return NULL;
    }
}

function getPrice($id)
{
    global $priceList;
    $isGoodsID = array_key_exists($id, $priceList);
    if ($isGoodsID) {
        return $priceList[$id];
    } else {
        return NULL;
    }
}
