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
		$maxEl = $track->lastEl;
		$currentElement = $track->isCurveOrStraight($this->position);
		$nextEl = $currentElement ? $this->driveCurve() : $this->driveStraight();
		$nextEl = ($nextEl >= $maxEl) ? $maxEl : $nextEl;
		if ($this->willChangeElementType($track, $nextEl, $currentElement)) {
			$nextEl = $nextEl - ($nextEl % $track->elementMultiples);
		}
		$this->position = $nextEl;
	}

	public function driveStraight(): int
	{
		return $this->position + $this->straightSpeed;
	}

	public function driveCurve(): int
	{
		return $this->position + $this->curveSpeed;
	}

	public function willChangeElementType($track, $nextEl, $currentElement): bool
	{
		return $track->isCurveOrStraight($nextEl) !== $currentElement;
	}
}
