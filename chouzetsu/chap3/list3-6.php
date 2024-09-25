<?php
// 	ログ無しフラグで切り替えるアイデア

class PetShop
{
	public function __construct(
		protected App $app,
		protected bool $withoutLogging = false
	) {}

	private function paycheck()
	{
		if (!$this->withoutLogging) {
			$this->app->getLogger()->log("begin");
		}

		//transaction

		if (!$this->withoutLogging) {
			$this->app->getLogger()->log("end");
		}
	}
}

$shop = new PetShop($app, true);
