<?php

class RoundResult
{
	/**
	 * @var int
	 */
	public $step;

	/**
	 * @var array
	 */
	public $carsPosition;

	public function __construct(int $step, array $cars)
	{
		$this->step = $step;
		$this->setCarPositions($cars);
	}

	public function runRound($cars, $track)
	{
		foreach ($cars as $car) {
			$car->drive($track);
		}
		$this->setCarPositions($cars);
		$this->step++;
		return new RoundResult($this->step, $cars);
	}

	public function setCarPositions($cars)
	{
		$carsPosition = [];
		for ($i = 0; $i < count($cars); $i++) {
			$car = $cars[$i];
			$carsPosition[$car->name] = $car->position;
		}
		$this->carsPosition =  $carsPosition;
	}

	public function endRace($track)
	{
		$maxPos = $track->totalElements - 1;
		return in_array($maxPos, $this->carsPosition);
	}
}
