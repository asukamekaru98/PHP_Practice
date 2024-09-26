<?php
abstract class pet
{
	abstract public function reaction();
}

class PetshopCustomer
{
	public function touch(Pet $pet)
	{
		$pet->reaction();
	}
}
