<?php
class Track
{

	public $track = [];
	public $elementMultiples = 40;
	public $totalElements = 2000;

	public function __construct()
	{
		$type = 0;
		for ($pos = 0; $pos < $this->totalElements; $pos++) {
			if ($this->isSectionChange($pos)) {
				$type = rand(0, 1);
			}
			$this->track[$pos] = $type;
		}
		// print_r($this->track);
	}

	public function isSectionChange($pos)
	{
		return $pos % $this->elementMultiples == 0;
	}

	public function isCurveOrStraight($pos)
	{
		return $this->track[$pos];
	}
}
