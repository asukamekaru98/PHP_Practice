<?php
// FizzBuzzの仕様を表すクラス


namespace FizzBuzz\Spec;

use FizzBuzz\Core\ReplaceRuleInterface;
use FizzBuzz\Core\NumberConverter;

/*
*　倍数に関するルール
*/

class CycleNumberRule implements ReplaceRuleInterface
{
	public function __construct(
		protected int $base,
		protected string $replacement
	) {}

	public function match(string $carry, int $n): bool
	{
		return $n % $this->base === 0;
	}

	public function apply(string $carry, int $n): string
	{
		return $carry . $this->replacement;
	}
}

/*
* 変更条件にマッチしない場合のルール
*/
class PassThroughRule implements ReplaceRuleInterface
{
	public function match(string $carry, int $n): bool
	{
		return $carry == "";
	}

	public function apply(string $carry, int $n): string
	{
		return (string)$n;
	}
}
