<?php
// 標準デバイス

namespace BuiltinDevice;

class BuildtinKeyboard implements \Operation\KeyboardInterface
{
	public function typeKey(string $code): void {}
}

class BuiltinTrackpad implements \Operation\PointingDeviceInterface
{
	public function moveCourse(float $direction, float $distance): void {}
}
