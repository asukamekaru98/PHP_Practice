<?php

use InternalBus;

class USBPort
{
	private InternalBus $internalBus;

	public function plugKeyBoard(USBKeyboard $keyboard): void
	{
		$keyboard->connect($this->internalBus);
	}

	public function plugMouse(USBMouse $mouse): void
	{
		$mouse->connect($this->internalBus);
	}
}
