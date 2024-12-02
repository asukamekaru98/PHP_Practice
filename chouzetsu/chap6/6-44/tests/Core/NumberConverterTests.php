<?php

namespace FizzBuzz\Core2;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use FizzBuzz\Core2\ReplaceRuleInterface;

class NumberConverterTest extends TestCase
{
	public function testConverterWithEmptyRules()
	{
		$fizzbuzz = new NumberConverter([]);
		$this->assertEquals('', $fizzbuzz->convert(1));
	}

	public function testConverterWithFizzBuzzRule()
	{
		$fizzbuzz = new NumberConverter([
			$this->createMockRule(
				1,
				"",
				true,
				"Replaced"
			)
		]);
		$this->assertEquals('Replaced', $fizzbuzz->convert(1));
	}

	public function testConvertSkippingUnmatchedRule()
	{
		$fizzbuzz = new NumberConverter([
			$this->createMockRule(
				1,
				"",
				false,
				"Replaced"
			),
			$this->createMockRule(
				1,
				"",
				false,
				"Buzz"
			),
			$this->createMockRule(
				1,
				"",
				true,
				"1"
			)
		]);
		$this->assertEquals('1', $fizzbuzz->convert(1));
	}

	public function testConvertCompositingRuleResults()
	{
		$fizzbuzz = new NumberConverter([
			$this->createMockRule(
				1,
				"",
				true,
				"Fizz"
			),
			$this->createMockRule(
				1,
				"",
				false,
				"Buzz"
			),
			$this->createMockRule(
				1,
				"Fizz",
				true,
				"FizzBuzz"
			)
		]);
		$this->assertEquals('FizzBuzz', $fizzbuzz->convert(1));
	}
	private function createMockRule(
		int $expectedNumber,
		string $exceptedCarry,
		bool $matchResult,
		string $replacement
	): ReplaceRuleInterface | MockObject {
		$rule = $this->createMock(ReplaceRuleInterface::class);
		$rule->expects($this->any())
			->method('apply')
			->with($exceptedCarry, $expectedNumber)
			->willReturn($replacement);

		$rule->expects($this->atLeastOnce())
			->method('match')
			->with($exceptedCarry, $expectedNumber)
			->willReturn($matchResult);

		return $rule;
	}
}
