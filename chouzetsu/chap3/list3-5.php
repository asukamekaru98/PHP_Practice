<?php

class Pet
{
	public $type;
}

class PetshopCustomer
{
	public function touch(Pet $pet)
	{
		switch ($pet->type) {
			case 'Dog':
				echo "ワン";
				break;
			case 'Cat':
				echo "ニャン";
				break;
			default:
				throw new InvalidArgumentException();
		}
	}
}
