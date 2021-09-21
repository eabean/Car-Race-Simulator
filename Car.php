<?php

class Car
{
	/**
	 * @var int type of the element. 'straight' or 'curve'
	 */
	public $straightSpeed = 0;
	/**
	 * @var int type of the element. 'straight' or 'curve'
	 */
	public $curveSpeed = 0;
	public $totalSpeed = 22;
	public $minSpeed = 4;



	public function __construct()
	{
		$this->straightSpeed = rand($this->minSpeed, $this->totalSpeed - $this->minSpeed);
		$this->curveSpeed = $this->totalSpeed - $this->straightSpeed;
		echo $this->straightSpeed . "\n";
		echo $this->curveSpeed . "\n";
	}
}
