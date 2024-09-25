<?php

abstract class Pet
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

class Dog extends Pet
{
	public function reaction()
	{
		echo "ワン";
	}
}

class Cat extends Pet
{
	public function reaction()
	{
		echo "ニャン";
	}
}

$customer = new PetshopCustomer();
$customer->touch(new Dog());
$customer->touch(new Cat());
