<?php

namespace FizzBuzz\Core;

class NumberConverter
{

	#失敗するメソッドの実装
	/*
	public function convert(int $n): string
	{

		#型が合っているだけで、結果は間違っている
		return "";
	}
	*/

	#テストを成功させる最小の実装(1)
	/*
	public function convert(int $n): string
	{
		return "1";
	}
	*/

	#テストを成功させる最小の実装(2)
	/*
	public function convert(int $n): string
	{
		return (string)$n;
	}
	*/

	#テストを成功させる最小の実装(3)
	/*
	public function convert(int $n): string
	{
		$result = "";

		foreach ($this->rules as $rule) {
			$result .= $rule->replace($n);
		}
		return $result;
	}
*/

	public function convert(int $n): string
	{
		return array_reduce(
			$this->rules,
			function ($carry, $rule) use ($n) {
				return $carry . $rule->replace($n);
			},
			""
		);
	}
}
