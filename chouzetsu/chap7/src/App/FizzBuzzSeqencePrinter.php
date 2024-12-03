<?php

namespace FizzBuzz\App;

use FizzBuzz\Core2\NumberConverter;
use FizzBuzz\Spec2\CyclicNumberRule;
use FizzBuzz\Spec2\PassThroughRule;


class FizzBuzzSeqencePrinter
{
	public function printRange(int $begin, int $end): void
	{
		$fizzBuzz = new NumberConverter([
			new CyclicNumberRule(3, "Fizz"),
			new CyclicNumberRule(5, "Buzz"),
			new PassThroughRule()
		]);

		for ($i = $begin; $i <= $end; $i++) {
			printf("%d %s\n", $i, $fizzBuzz->convert($i));
		}
	}
}
