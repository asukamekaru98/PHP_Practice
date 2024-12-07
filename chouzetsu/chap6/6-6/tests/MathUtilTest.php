<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../../../6-2/src/Math.php';
require_once __DIR__ . '/../src/MathUtil.php';

class MathUtilTest extends TestCase
{
	public function testSaturate(): void
	{
		$mathUtil = new MathUtil(new Math);

		// 範囲内ならそのまま
		$this->assertEquals(2, $mathUtil->saturate(2, 1, 3));

		// 範囲外なら上限値or下限値になる
		$this->assertEquals(1, $mathUtil->saturate(0, 1, 3));
		$this->assertEquals(3, $mathUtil->saturate(4, 1, 3));

		// 上限値or下限値と同じ値は範囲内である
		$this->assertEquals(1, $mathUtil->saturate(1, 1, 3));
		$this->assertEquals(3, $mathUtil->saturate(3, 1, 3));
	}
}
