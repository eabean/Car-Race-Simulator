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
		$this->carsPosition = $this->getCarPositions($cars);
	}

	public function runRound($cars, $track)
	{
		foreach ($cars as $car) {
			$car->drive($track);
		}
		$this->carsPosition = $this->getCarPositions($cars);
		$this->step++;
	}

	public function getCarPositions($cars)
	{
		$carsPosition = [];
		for ($i = 0; $i < count($cars); $i++) {
			$car = $cars[$i];
			$carsPosition[$car->name] = $car->position;
		}
		return $carsPosition;
	}

	public function endRace($track)
	{
		return in_array($track->totalElements - 1, $this->carsPosition);
	}
}
