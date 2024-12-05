<?php

namespace FizzBuzz\App;

use FizzBuzz\Core2\NumberConverter;

class FizzBuzzSeqencePrinter
{
	public function __construct(
		protected NumberConverter $fizzbuzz,
		protected OutputInterface $output
	) {}

	public function printRange(int $begin, int $end): void
	{

		for ($i = $begin; $i <= $end; $i++) {
			$text = $this->fizzbuzz->convert($i);
			$formattedText = sprintf("%d %s\n", $i, $text);
			$this->output->write($formattedText);
		}
	}
}

interface OutputInterface
{
	public function write(string $data): void;
}
