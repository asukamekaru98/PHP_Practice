<?php

namespace FizzBuzz\Core;

class NumberConverter
{
	/**
	 * @param ReplaceRuleInterface[] $rules
	 */
	public function __construct(
		protected array $rules
	) {}

	public function convert(int $n): string
	{
		$result = "";
		foreach ($this->rules as $rule) {
			$result .= $rule->replace($n);
		}
		return $result;
	}
}
