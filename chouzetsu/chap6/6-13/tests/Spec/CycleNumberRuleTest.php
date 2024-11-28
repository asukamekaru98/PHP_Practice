<?php

namespace FizzBuzz\Spec;

use PHPUnit\Framework\TestCase;

class CycleNumberRuleTest extends TestCase
{
	public function testConvert()
	{
		$rule = new CycleNumberRule(3, 'Fizz');
		$this->assertEquals("", $rule->replace(1));
		$this->assertEquals("Fizz", $rule->replace(3));
		$this->assertEquals("Buzz", $rule->replace(6));
	}
}
