<?php
abstract class Pet
{
	abstract public function reaction();
}

class ParameterzedPet extends Pet
{
	public function __construct(
		protected string $voice
	) {}

	public function reaction()
	{
		echo $this->voice;
	}
}

$customer = new PetshopCustomer();
$customer->touch(new ParameterzedPet("ワン"));
$customer->touch(new ParameterzedPet("ニャン"));
