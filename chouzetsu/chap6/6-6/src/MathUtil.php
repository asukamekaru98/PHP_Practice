<?php

class MathUtil
{
	public function saturate(int $value, int $min, int $max): int
	{
		$math = new Math();
		return $math->min($math->max($value, $min), $max);
	}
}
