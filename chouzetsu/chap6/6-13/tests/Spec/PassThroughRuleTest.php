<?php

namespace FizzBuzz\Spec;

use PHPUnit\Framework\TestCase;

class PassThroughRuleTest extends TestCase
{
	public function testReplace()
	{
		$rule = new PassThroughRule();
		$this->assertEquals("1", $rule->replace(1));
	}
}
