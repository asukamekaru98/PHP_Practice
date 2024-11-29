<?php

namespace FizzBuzz\Spec;

use FizzBuzz\Core\PassThroughRuleInterface;

class PassThroughRule/* implements ReplaceRuleInterface*/
{
	private $exceptionalNumbers;

	public function replace(int $n): string
	{
		foreach ($this->exceptionalNumbers as $exceptionalNumber) {
			if ($n % $exceptionalNumber === 0) {
				return "";
			}
		}

		return (string)$n;
	}
}
