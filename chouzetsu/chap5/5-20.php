<?php

// 具象USBデバイス

interface InternalBus
{
	public function send(string $data): void;
}

class USBKeyboard
{
	public function connect(InternalBus $bus): void {}
	public function typeKey(string $code): void {}
}

class USBMouse
{
	public function connect(InternalBus $bus): void {}
	public function moveCursor(float $direction, float $distanceint): void {}
}
