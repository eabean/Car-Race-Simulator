<?php

class Car
{

	public $name;
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

	public function drive($track)
	{
		$maxPos = $track->totalElements - 1;
		$currentElement = $track->isCurveOrStraight($this->position);
		$nextPos = $currentElement ? $this->driveCurve() : $this->driveStraight();
		if ($this->willChangeElementType($track, $nextPos, $currentElement)) {
			$nextPos = $nextPos - ($nextPos % $track->elementMultiples);
		}
		$this->position = ($nextPos >= $maxPos) ? $maxPos : $nextPos;
	}

	public function driveStraight()
	{
		return $this->position + $this->straightSpeed;
	}

	public function driveCurve()
	{
		return $this->position + $this->curveSpeed;
	}

	public function willChangeElementType($track, $nextPos, $currentElement)
	{
		return $track->isSectionChange($nextPos) &&
			$track->isCurveOrStraight($nextPos) !== $currentElement;
	}
}
