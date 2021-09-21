<?php

class RaceResult
{
	/**
	 * @var array of roundResults
	 */
	private $roundResults = [];

	public function startRace()
	{
		$car1 = new Car();
		$car2 = new Car();
		$car3 = new Car();
		$car4 = new Car();
		$car5 = new Car();
		$carsPosition[$car1] = $car1;
		$carsPosition[$car2] = $car2;
		$carsPosition[$car3] = $car3;
		$carsPosition[$car4] = $car4;
		$carsPosition[$car5] = $car5;
		print_r($carsPosition);
	}

	public function getRoundResults(): array
	{
		return $this->roundResults;
	}
}
