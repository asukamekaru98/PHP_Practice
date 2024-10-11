<?php

class TaskDisplay
{
	protected $total;
	protected $done;

	public function show(): string
	{
		return "{$this->total}件中{$this->done}件完了";
	}
}

//リスコフの痴漢原則に違反している
class PercentileDisplay extends TaskDisplay
{
	public function show(): string
	{
		$percent = (int) (($this->done / $this->total) * 100);

		return parent::show() . "($percent %)";
	}
}

//リスコフの痴漢原則に違反していない
class PercentileDisplay2 extends TaskDisplay
{
	public function show(): string
	{
		if ($this->total === 0) {
			//やることがなければ100%とする
			$percent = 100;
		} else {
			$percent = (int) (($this->done / $this->total) * 100);
		}

		return parent::show() . "($percent %)";
	}
}
