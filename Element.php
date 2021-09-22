<?php

class Element
{
	// 0 is 'straight', 1 is 'curve'
	public $type;
	public $pos;

	public function __construct(int $type, int $pos)
	{
		$this->type = $type;
		$this->pos = $pos;
	}
}
