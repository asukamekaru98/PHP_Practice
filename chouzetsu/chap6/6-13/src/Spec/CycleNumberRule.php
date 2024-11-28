<?php

namespace FizzBuzz\Spec;

use FizzBuzz\Core\ReplaceRuleInterface;

class CycleNumberRule implements ReplaceRuleInterface
{
	public function __construct(
		private int $base,
		private string $replacemnet
	) {}

	public function replace(int $n): string
	{
		return ($n % $this->base === 0) ? $this->replacemnet : "";
	}

	public function match(string $carry, int $n): bool
	{
		return false;
	}

	public function apply(string $carry, int $n): string
	{
		return "";
	}
}
