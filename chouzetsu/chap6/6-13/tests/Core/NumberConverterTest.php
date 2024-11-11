<?php

namespace FizzBuzz\Core;

use PHPUnit\Framework\TestCase;

class NumberConverterTest extends TestCase
{
	public function textConvert()
	{
		$fizzBuzz = new NumberConverter([]);
		$this->assertEquals('1', $fizzBuzz->convert(1));
		$this->assertEquals('2', $fizzBuzz->convert(2));
		$this->assertEquals('Fizz', $fizzBuzz->convert(3));
		$this->assertEquals('4', $fizzBuzz->convert(4));
		$this->assertEquals('Buzz', $fizzBuzz->convert(5));
		$this->assertEquals('FizzBuzz', $fizzBuzz->convert(15));
	}
}
