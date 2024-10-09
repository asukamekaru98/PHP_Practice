<?php

namespace FizzBuzz\Core;

interface FizzBuzzRuleInterface
{
	public function match(string $carry, int $n): bool;
	public function apply(string $carry, int $n): string;
}

class NumberConvertrt
{
	public function __construct() {}
}
