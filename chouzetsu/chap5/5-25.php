<?php
class PCOperator
{
	public function __construct(
		protected BuildtinKeyboard $buildtinKeyboard,
		protected BuiltinTrackpad $builtinTrackpad,
		protected ?USBKeyboard $usbKeyboard = null,
		protected ?USBMouse $usbMouse = null
	) {}

	public function inputText(array $codes): void
	{
		foreach ($codes as $code) {
			// USBキーボードが接続されている場合はUSBキーボードを使う。
			// なければビルトインキーボードを使う
			if ($this->usbKeyboard) {
				$this->usbKeyboard->typeKey($code);
			} else {
				$this->buildtinKeyboard->typeKey($code);
			}
		}
	}

	public function pointAt(int $x, int $y): void
	{
		// inputTextと同じような面倒がある
	}
}
