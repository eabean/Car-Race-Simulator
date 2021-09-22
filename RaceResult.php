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
		$roundResult = new RoundResult(0, $this->cars);
		$track = new Track();
		while (!$roundResult->endRace($track)) {
			array_push($this->roundResults, $roundResult);
			echo "<pre>";
			print_r($roundResult);
			echo "</pre>";
			$roundResult->runRound($this->cars, $track);
		}
	}

	public function getRoundResults(): array
	{
		return $this->roundResults;
	}
}
