<?php
function warikan($total, $ninzu)
{
    if ($ninzu <= 0) {
        return;
    }
    $result = $total / $ninzu;
    echo "{$total}YEN {$ninzu}で分ける、{$result}円";
    echo "<br>" . PHP_EOL;
}

warikan(2500, 2);
warikan(3000, 0);
warikan(5500, 4);
