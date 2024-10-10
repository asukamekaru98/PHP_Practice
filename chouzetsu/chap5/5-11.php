<?php

use FizzBuzz\Core\NumberConverter;
use FizzBuzz\Spec\CycleNumberRule;
use FizzBuzz\Spec\PassThroughRule;

$fizzbuzz = new NumberConverter([
	new CycleNumberRule(3, 'Fizz'),
	new CycleNumberRule(5, 'Buzz'),
	new PassThroughRule(),
]);

echo $fizzbuzz->convert(1), PHP_EOL;	// 1
echo $fizzbuzz->convert(3), PHP_EOL;	// Fizz
echo $fizzbuzz->convert(5), PHP_EOL;	// Buzz
echo $fizzbuzz->convert(12), PHP_EOL;	// FizzBuzz