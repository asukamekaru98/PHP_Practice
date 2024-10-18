<?php

// 具象USBデバイスポート

abstract class AbstractUSBDevice
{
	abstract public function connect(InternalBus $internalBus): void;
}

class USBPort
{
	private InternalBus $internalBus;

	public function plug(AbstractUSBDevice $device): void
	{
		$device->connect($this->internalBus);
	}
}
