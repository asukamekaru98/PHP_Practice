<?php

namespace FizzBuzz\Spec;

use FizzBuzz\Core\PassThroughRuleInterface;

class PassThroughRule/* implements ReplaceRuleInterface*/
{
	public function replace(int $n): string
	{
		return (string)$n;
	}
}
