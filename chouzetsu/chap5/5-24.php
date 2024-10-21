<?php

// ビルトインデバイス

class BuildtinKeyboard
{
	public function typeKey(string $code): void {}
}

class BuiltinTrackpad
{
	public function moveCourse(float $direction, float $distance): void {}
}
