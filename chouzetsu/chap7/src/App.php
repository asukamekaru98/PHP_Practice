<?php

namespace FizzBuzz;

use FizzBuzz\App\FizzBuzzSeqencePrinter;

class App
{
	public static function main(): void
	{
		$printer = new FizzBuzzSeqencePrinter();
		$printer->printRange(1, 100);
	}
}

require __DIR__ . "/../vendor/autoload.php";

App::main();
