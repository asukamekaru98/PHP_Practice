<?php

use PHPUnit\Framework\TestCase;
// スタブオブジェクト


class MathUtilTest extends TestCase
{
	public function testSaturate(): void
	{
		$mathStub = $this->createMock(Math::class);
		$mathUtil = new MathUtil(new Math()/*$mathStub*/);

		$mathStub->method('max')->willReturn(2);
		$mathStub->method('min')->willReturn(1);
		$result = $mathUtil->saturate(2, 1, 3);

		$this->assertEquals(2, $result);
	}
}
