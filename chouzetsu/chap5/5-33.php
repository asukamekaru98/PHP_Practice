<?php

// 変更に対してクローズドな本質

namespace FizzBuzz\Core;

interface ReplaceRuleInterface {}


class NumberConverter
{
	/** @var ReplaceRuleInterface[] */
	protected array $rules = [];
}
