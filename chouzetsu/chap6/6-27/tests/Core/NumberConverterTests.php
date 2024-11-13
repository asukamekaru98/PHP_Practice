<?php

namespace FizzBuzz\Core;

use PHPUnit\Framework\TestCase;

class NumberConverterTests extends TestCase
{
	public function testConverterWithEmptyRules()
	{
		// スタブ/モック
		$rule = $this->createMock(ReplaceRuleInterface::class);
		$rule->expects($this->atLeastOnce())
			->method('replace')
			->with(1)
			->willReturn("Replaced");


		$fizzbuzz = new NumberConverter([$rule]);
		$this->assertEquals('', $fizzbuzz->convert(1));
	}

	public function testConverterWithFizzBuzzRule()
	{
		$fizzbuzz = new NumberConverter([
			$this->createMockRule(
				'FizzBuzz',
				15
			)
		]);
		$this->assertEquals('Fizz', $fizzbuzz->convert(3));
	}
}
