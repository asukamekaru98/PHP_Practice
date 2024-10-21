<?php
// 拡張デバイス

namespace ExternalDevice;


use Connection\InternalBus;
use Connection\USBDriverInterface;
use Operation\KeyboardInterface;
use Operation\PointingDeviceInterface;



class USBKeyboard implements KeyboardInterface, USBDriverInterface
{
	public function connect($bus): void
	{
		// USBキーボードを接続する処理

	}
	public function typeKey(string $code): void {}
}

class USBMouse implements PointingDeviceInterface, USBDriverInterface
{
	public function connect($bus): void {}
	public function moveCourse(float $direction, float $distance): void {}
}
