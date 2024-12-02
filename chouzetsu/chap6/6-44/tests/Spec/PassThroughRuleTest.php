<?php

namespace FizzBuzz\Spec;

use PHPUnit\Framework\TestCase;

class PassThroughRuleTest extends TestCase
{
	public function testApply()
	{
		$rule = new PassThroughRule();
		$this->assertEquals("1", $rule->apply("", 1));
		$this->assertEquals("2", $rule->apply("", 2));

		$this->assertEquals("3", $rule->apply("Fizz", 3));
	}

	public function testMatch()
	{
		$rule = new PassThroughRule();
		$this->assertTrue($rule->match("", 0));
		$this->assertFalse($rule->match("Fizz", 0));
	}
}
