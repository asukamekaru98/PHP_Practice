<?php
// 抽象デバイスの接続

namespace Connection;

use InternalBus;

interface USBDriverInterface
{
	public function connect(InternalBus $bus): void;
}

class USBPort
{
	private InternalBus $bus;

	public function plug(USBDriverInterface $driver): void
	{
		$driver->connect($this->bus);
	}
}
