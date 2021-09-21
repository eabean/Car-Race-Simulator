<?php
include('RaceResult.php');
class Race
{

	public function runRace(): RaceResult
	{
		$raceResult = new RaceResult();
		return $raceResult;
	}
}
