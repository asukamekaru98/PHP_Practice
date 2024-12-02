<?php

namespace FizzBuzz\Core2;

class NumberConverter
{
	/**
	 * @param ReplaceRuleInterface[] $rules
	 */
	public function __construct(
		protected array $rules
	) {}

	/*
	public function convert(int $n): string
	{
		$carry = "";
		foreach ($this->rules as $rule) {
			if ($rule->match($carry, $n)) {
				$carry = $rule->apply($carry, $n);
			}
		}
		return $carry;
	}
	*/

	public function	convert(int $n): string
	{
		return array_reduce(
			$this->rules,
			function ($carry, $rule) use ($n) {
				return $rule->match($carry, $n) ?
					$rule->apply($carry, $n) : $carry;
			},
			""
		);
	}
}
