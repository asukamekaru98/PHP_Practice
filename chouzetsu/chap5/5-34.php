<?php
// 変更に対してオープンな仕様

namespace FizzBuzz\Spec;

use FizzBuzz\Core\ReplaceRuleInterface;

class CyclicNumberRule implements ReplaceRuleInterface
{
	public function match(string $carry, int $n): bool
	{
		// 実装例
		return $n % 3 === 0;
	}

	public function apply(string $carry, int $n): string
	{
		// 実装例
		return $carry . 'Fizz';
	}
}

class PassThroughRule implements ReplaceRuleInterface
{
	public function match(string $carry, int $n): bool
	{
		// 実装例
		return true;
	}

	public function apply(string $carry, int $n): string
	{
		// 実装例
		return $carry;
	}
}
