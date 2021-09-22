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
	public $cars = [];
	public $numOfCars = 5;

	public function startRace()
	{
		for ($i = 1; $i <= $this->numOfCars; $i++) {
			$carName = "car" . $i;
			array_push($this->cars, new Car($carName));
		}
		// $carsPosition = $this->getCarPositions();
		$roundResult = new RoundResult(0, $this->cars);
		$track = new Track();
		print_r($roundResult);

		// while (!$roundResult->endRace()) {
		// 	array_push($this->roundResults, $roundResult);
		// 	$roundResult->runRound($this->cars, $track);
		// }
	}

	// public function getCarPositions()
	// {
	// 	$carsPosition = [];
	// 	for ($i = 0; $i < $this->numOfCars; $i++) {
	// 		$car = $this->cars[$i];
	// 		$carsPosition[$car->name] = $car->position;
	// 	}
	// 	print_r($carsPosition);
	// 	return $carsPosition;
	// }

	public function getRoundResults(): array
	{
		return $this->roundResults;
	}
}
