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
	/**
	 * @var array of Cars
	 */
	public $cars = [];
	/**
	 * @var int number of cars in the race
	 */
	public $numOfCars = 5;

	public function startRace(): void
	{
		for ($i = 1; $i <= $this->numOfCars; $i++) {
			$carName = "car" . $i;
			array_push($this->cars, new Car($carName));
		}
		$track = new Track();
		$roundResult = new RoundResult(0, $this->cars);
		while ($roundResult->endRace($track) == false) {
			array_push($this->roundResults, $roundResult);
			$roundResult = $roundResult->runRound($this->cars, $track);
		}
	}

	public function getRoundResults(): array
	{
		return $this->roundResults;
	}
}
