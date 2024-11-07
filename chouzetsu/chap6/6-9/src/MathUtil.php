<?php

// 振る舞いへの依存を分離する

class MathUtil
{
	public function __construct(
		protected Math $math
	) {}

	public function saturate(int $value, int $min, int $max): int
	{
		return $this->math->min(
			$this->math->max($value, $min),
			$max
		);
	}
}
