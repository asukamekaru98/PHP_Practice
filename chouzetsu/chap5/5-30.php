<?php

// 安定方向に依存しない悪い例

// NG例
// USBキーボードを接続する処理がUSBポートに依存している
class USBKeyboard
{
	public function connect(InternalBus $bus): void
	{
		// USBキーボードを接続する処理
	}
}

class USBPort
{
	private InternalBus $internalBus;

	public function plugKeyboard(USBKeyboard $keyboard): void
	{
		$keyboard->connect($this->internalBus);
	}
}
