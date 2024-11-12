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
		if (!empty($this->rules)) {
			return $this->rules[0]->replace($n);
		} else {
			return "";
		}
	}
}
