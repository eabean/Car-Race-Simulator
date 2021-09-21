<?php

class Car
{
	/**
	 * @var int type of the element. 'straight' or 'curve'
	 */
	public $straightSpeed = '';
	/**
	 * @var int type of the element. 'straight' or 'curve'
	 */
	public $curveSpeed = '';


	public function __construct(int $startPos)
	{
		$this->type = rand(0, 1) ? 'straight' : 'curve';
		$this->positions = range($startPos, $startPos + $this->length - 1);
	}
}
