<?php

class RoundResult
{
	/**
	 * @var int round number
	 */
	public $step;

	/**
	 * @var array array of car positions
	 */
	public $carsPosition;

	public function __construct(int $step, array $cars)
	{
		$this->step = $step;
		$this->setCarPositions($cars);
	}

	public function runRound($cars, $track): RoundResult
	{
		foreach ($cars as $car) {
			$car->drive($track);
		}
		$this->setCarPositions($cars);
		$this->step++;
		return new RoundResult($this->step, $cars);
	}

	public function setCarPositions($cars): void
	{
		$carsPosition = [];
		for ($i = 0; $i < count($cars); $i++) {
			$car = $cars[$i];
			$carsPosition[$car->name] = $car->position;
		}
		$this->carsPosition =  $carsPosition;
	}

	public function endRace($track): bool
	{
		$maxPos = $track->totalElements - 1;
		return in_array($maxPos, $this->carsPosition);
	}
}
