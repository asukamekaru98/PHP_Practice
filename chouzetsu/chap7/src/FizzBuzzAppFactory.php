<?php

namespace FizzBuzz;

use FizzBuzz\App\FizzBuzzSeqencePrinter;
use FizzBuzz\App\OutputInterface;
use FizzBuzz\Core2\NumberConverter;
use FizzBuzz\Core2\ReplaceRuleInterface;
use FizzBuzz\Spec2\PassThroughRule;
use FizzBuzz\Spec2\CyclicNumberRule;


class App
{
	public static function main(): void
	{
		$factory = new FizzBuzzAppFactory();
		$printer = $factory->create();
		$printer->printRange(1, 100);
	}
}

class FizzBuzzAppFactory
{
	public function create(): FizzBuzzSeqencePrinter
	{
		return new FizzBuzzSeqencePrinter(
			$this->createFizzBuzz(),
			$this->createOutput()
		);
	}

	protected function createFizzBuzz(): NumberConverter
	{
		return new NumberConverter([
			$this->createFizzBuzz(),
			$this->createBuzzRule(),
			$this->createPassThroughRule(),
		]);
	}

	protected function createFizzRule(): ReplaceRuleInterface
	{
		return new CyclicNumberRule(3, "Fizz");
	}

	protected function createBuzzRule(): ReplaceRuleInterface
	{
		return new CyclicNumberRule(5, "Buzz");
	}

	protected function createPassThroughRule(): ReplaceRuleInterface
	{
		return new PassThroughRule();
	}

	protected function createOutput(): OutputInterface
	{
		return new ConsoleOutput();
	}
}

class ConsoleOutput implements OutputInterface
{
	public function write(string $data): void
	{
		echo $data;
	}
}

require __DIR__ . '/../../vendor/autoload.php';
App::main();
