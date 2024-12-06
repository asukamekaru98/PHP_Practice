<?php

namespace FizzBuzz;

use FizzBuzz\App\FizzBuzzSeqencePrinter;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;


class App
{
	public static function main(): void
	{
		$containerBuilder = new ContainerBuilder();
		$loader = new YamlFileLoader(
			$containerBuilder,
			new FileLocator(__DIR__ . '/../config')
		);

		$loader->load('services.yaml');
		$containerBuilder->compile();

		$containerBuilder->get(FizzBuzzSeqencePrinter::class)->printRange(1, 100);
	}
}

require __DIR__ . "/../vendor/autoload.php";

App::main();
