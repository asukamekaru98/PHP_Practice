<?php
function charge($rank, $days = 1, $chip = 500)
{
    switch ($rank) {
        case "A":
            $ryoukin = 15000 * $days + $chip;
            break;
        case "B":
            $ryoukin = 12000 * $days + $chip;
            break;
        default:
            $ryoukin = 8000 * $days + $chip;
            break;
    }
    return $ryoukin;
}
?>

<?php
$kingaku1 = charge("B", 2);
$kingaku2 = charge("A"); // "A",,0 というふうにはできない

echo "金額1は{$kingaku1}円" . "<br>" . PHP_EOL;
echo "金額1は{$kingaku2}円";
?>
