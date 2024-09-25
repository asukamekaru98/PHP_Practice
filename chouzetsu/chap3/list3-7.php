<?php
//多能性を活用したロギングのオンオフ

class PetShop
{
	public function __construct(
		protected LoggetInterface $logger
	) {}

	private function payCheck()
	{
		$this->logger->log("begin");

		$this->logger->log("end");
	}
}

class NullLogger implements LoggetInterface
{
	public function log(string $message)
	{
		//Do nothing.
	}
}

//$shop = new PetShop($app->getLogger());	//ログを書く
$shop = new PetShop(new NullLogger());		//ログを書かない
