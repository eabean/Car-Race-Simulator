<?php

class Element
{
	/**
	 * @var string type of the element. 'straight' or 'curve'
	 */
	public $type = '';
	/**
	 * @var int length of the element
	 */
	public $length = 40;
	/**
	 * @var array positions of the track for this element
	 */
	public $positions = [];
	// public $startPos = 0;
	// public $endPos = 0;

	public function __construct(int $startPos)
	{
		$this->type = rand(0, 1) ? 'straight' : 'curve';
		$this->positions = range($startPos, $startPos + $this->length - 1);
	}
}
