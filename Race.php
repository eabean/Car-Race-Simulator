<?php
include('RaceResult.php');
class Race
{

	public function runRace(): RaceResult
	{
		$raceResult = new RaceResult();
		$raceResult->startRace();
		return $raceResult;
	}
}
