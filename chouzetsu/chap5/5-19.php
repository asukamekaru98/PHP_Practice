<?php

// 分離されたインターフェイスを使うアプリケーション

namespace MyApp;

use DB\DataInputInterface;
use DB\DataOutputInterface;

class CommandExecutor
{

	public function __construct(
		protected DataInputInterface $input
	) {}

	public function execute(...$args): void
	{
		$this->input->write(...$args);
	}
}

class QueryService
{
	function __construct(
		protected DataOutputInterface $output
	) {}

	public function query(...$args): mixed
	{
		return $this->output->read(...$args);
	}
}
