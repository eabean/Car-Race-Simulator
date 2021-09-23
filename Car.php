<?php

class Car
{
	/**
	 * @var string name of the car
	 */
	public $name;
	/**
	 * @var int total speed available
	 */
	public $totalSpeed = 22;
	/**
	 * @var int minimum speed for each speed type
	 */
	public $minSpeed = 4;
	/**
	 * @var int car's speed on a straight
	 */
	public $straightSpeed;
	/**
	 * @var int car's speed on a curve
	 */
	public $curveSpeed;
	/**
	 * @var int car's position on the track (element index)
	 */
	public $position = 0;

	public function __construct($name)
	{
		$this->name = $name;
		$this->straightSpeed = rand($this->minSpeed, $this->totalSpeed - $this->minSpeed);
		$this->curveSpeed = $this->totalSpeed - $this->straightSpeed;
	}

	public function drive($track): void
	{
		$maxPos = $track->lastPos;
		$currentElement = $track->isCurveOrStraight($this->position);
		$nextPos = $currentElement ? $this->driveCurve() : $this->driveStraight();
		$nextPos = ($nextPos >= $maxPos) ? $maxPos : $nextPos;
		if ($this->willChangeElementType($track, $nextPos, $currentElement)) {
			$nextPos = $nextPos - ($nextPos % $track->elementMultiples);
		}
		$this->position = $nextPos;
	}

	public function driveStraight(): int
	{
		return $this->position + $this->straightSpeed;
	}

	public function driveCurve(): int
	{
		return $this->position + $this->curveSpeed;
	}

	public function willChangeElementType($track, $nextPos, $currentElement): bool
	{
		return $track->isCurveOrStraight($nextPos) !== $currentElement;
	}
}
