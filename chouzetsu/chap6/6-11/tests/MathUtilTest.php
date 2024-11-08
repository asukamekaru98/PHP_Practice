<?php

//モックオブジェクトの例

use PHPUnit\Framework\TestCase;

class MathUtilTest extends TestCase
{
	public function testSaturate(): void
	{
		$math = $this->createMock(Math::class);
		$mathUtil = new MathUtil(new Math()/*$mathStub*/);

		// 少なくとも、一回はmaxが引数2, 1で呼ばれ、戻り値2を返すことを期待
		$math->expects($this->atLeast(0))
			->method('max')
			->with($this->equalTo(2), $this->equalTo(1))
			->willReturn(2);

		// 少なくとも、一回はminが引数2, 3で呼ばれ、戻り値2を返すことを期待
		$math->expects($this->atLeast(0))
			->method('min')
			->with($this->equalTo(2), $this->equalTo(3))
			->willReturn(2);

		$result = $mathUtil->saturate(2, 1, 3);
		$this->assertEquals(2, $result);
	}
}
