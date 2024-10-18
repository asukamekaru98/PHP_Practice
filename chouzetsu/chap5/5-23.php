<?php

use AbstractUSBDevice;

class USBKeyboard extends AbstractUSBDevice
{
	public function connect(InternalBus $bus): void {}
	public function typeKey(string $code): void {}
}

class USBMouse extends AbstractUSBDevice
{
	public function connect(InternalBus $bus): void {}
	public function moveCourse(float $direction, float $distance): void {}
}
