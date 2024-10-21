<?php

namespace Operation;

interface KeyboardInterface
{
	public function typeKey(string $code): void;
}

interface PointingDeviceInterface
{
	public function moveCourse(float $direction, float $distance): void;
}

class PCOperator
{
	public function __construct(
		protected KeyboardInterface $keyboard,
		protected PointingDeviceInterface $pointingDevice
	) {}

	public function inputText(array $codes): void
	{
		foreach ($codes as $code) {
			$this->keyboard->typeKey($code);
		}
	}

	public function pointAt(int $x, int $y): void
	{
		$this->pointingDevice->moveCourse($x, $y);
	}
}
