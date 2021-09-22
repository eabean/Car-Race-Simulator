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
	}

	public function getCarPositions($cars)
	{
		$carsPosition = [];
		for ($i = 0; $i < count($cars); $i++) {
			$car = $cars[$i];
			$carsPosition[$car->name] = $car->position;
		}
		print_r($carsPosition);
		return $carsPosition;
	}

	public function endRace()
	{
		return in_array("1999", $this->carsPosition);
	}
}
