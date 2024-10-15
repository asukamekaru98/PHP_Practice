<?php
// より狭い事後条件

interface ZooInterface
{
	public function randomWalk(): Animal;
}

class CatOnlyZoo implements ZooInterface
{
	public function randomWalk(): Cat
	{
		return new Cat();
	}
}




interface Animal
{
	public function cry(): string;
}

class Cat implements Animal
{
	public function cry(): string
	{
		return 'にゃー';
	}
}
