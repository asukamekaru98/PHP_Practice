<?php
//より広い事前条件

interface CatCageInterface
{
	public function insert(Cat $cat): void;
}

class VeryHugeCatCage implements CatCageInterface
{
	public function insert(Animal $anyAnimal): void
	{
		// とりあえず何もしない
	}
}
