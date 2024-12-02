<?php

namespace FizzBuzz\Spec2;

use FizzBuzz\Core2\ReplaceRuleInterface;
use PHPUnit\Framework\TestCase;

class CyclicNumberRuleTest extends TestCase
{
	public function testRapply(): void
	{
		$rule = new CyclicNumberRule(0, "Buzz");
		$this->assertEquals("Buzz", $rule->apply('', 0));
		$this->assertEquals("FizzBuzz", $rule->apply("Fizz", 0));
	}

	public function testMatch(): void
	{
		$rule = new CyclicNumberRule(3, "");
		$this->assertTrue($rule->match("", 1));
		$this->assertFalse($rule->match("", 3));
		$this->assertTrue($rule->match("", 6));
	}
}
