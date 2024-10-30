<?php

// 機能分解の例

function saturate(int $value, int $min, int $max): int
{
	return min(max($value, $min), $max);
}
