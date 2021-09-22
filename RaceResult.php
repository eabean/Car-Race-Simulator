<?php
include('Car.php');
include('RoundResult.php');
include('Track.php');
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
		$carsPosition = array(
			'car1' => $car1->position,
			'car2' => $car2->position,
			'car3' => $car3->position,
			'car4' => $car4->position,
			'car5' => $car5->position,
		);
		$track = new Track();
		$roundResult = new RoundResult(0, $carsPosition);
		print_r($carsPosition);
	}

	public function getRoundResults(): array
	{
		return $this->roundResults;
	}
}
