<?php

namespace FizzBuzz\Spec2;

use FizzBuzz\Core2\ReplaceRuleInterface;

class CyclicNumberRule implements ReplaceRuleInterface
{
	public function __construct(
		private int $base,
		private string $replacemnet
	) {}


	public function apply(string $carry, int $n): string
	{
		return $carry . $this->replacemnet;
	}

	public function match(string $carry, int $n): bool
	{
		return $n % $this->base === 0;
	}
}
