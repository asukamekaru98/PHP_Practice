<?php

use PHPunit\Framework\TestCase;

require_once __DIR__ . '../../src/Math.php';

class MathTest extends TestCase
{
	public function testMinMax(): void
	{
		$math = new Math();

		$minExpected = 1;
		$minResult = $math->min(a: 1, b: 2);
		$this->assertEquals($minExpected, $minResult);

		$maxExpected = 2;
		$maxResult = $math->max(a: 1, b: 2);
		$this->assertEquals($maxExpected, $maxResult);
	}
}
