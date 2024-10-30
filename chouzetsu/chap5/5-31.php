<?php

// 安定した抽象


interface USBDriverInterface
{
	public function connect($bus): void;
}


// OK例
// 抽象を前提に先に完成させる
class USBPort
{
	private InternalBus $internalBus;

	public function plugKeyboard(USBDriverInterface $keyboard): void
	{
		$keyboard->connect($this->internalBus);
	}
}
