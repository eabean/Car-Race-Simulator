<?php

class Car
{

	public $name = '';
	public $totalSpeed = 22;
	public $minSpeed = 4;
	public $straightSpeed;
	public $curveSpeed;
	public $position = 0;

	public function __construct($name)
	{
		$this->name = $name;
		$this->straightSpeed = rand($this->minSpeed, $this->totalSpeed - $this->minSpeed);
		$this->curveSpeed = $this->totalSpeed - $this->straightSpeed;
	}

	public function progressPosition($currentElement)
	{
		$track = new Track();
		$onCurve = $currentElement->type;
		$speed = $onCurve ? $this->curveSpeed : $this->straightSpeed;
		$nextPosition = $speed + $this->position;
		if ($track->isSectionChange($nextPosition) && $track->isCurveOrStraight($nextPosition) !== $onCurve) {
			$nextPosition = $nextPosition - ($nextPosition % $track->sectionLength);
		}
		$this->position = $nextPosition;
	}
}
