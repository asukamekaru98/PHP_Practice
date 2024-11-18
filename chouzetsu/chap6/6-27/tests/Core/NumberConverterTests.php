<?php

namespace FizzBuzz\Core;

use PHPUnit\Framework\MockObject\MockObject;
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
			),
			$this->createMockRule(
				1,
				"Buzz"
			)
		]);
		$this->assertEquals('FizzBuzz', $fizzbuzz->convert(3));
	}

	private function createMockRule(
		int $expectedNumber,
		string $replace
	): ReplaceRuleInterface|MockObject {
		$rule = $this->createMock(ReplaceRuleInterface::class);
		$rule->expects($this->atLeastOnce())
			->method('replace')
			->with($expectedNumber)
			->willReturn($replace);
		return $rule;
	}
}
