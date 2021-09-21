<?php

class Element
{
	public $type; // 0 is 'straight', 1 is 'curve'
	public $position;

	public function __construct(int $type, int $position)
	{
		$this->type = $type;
		$this->position = $position;
	}
}
