<?php
class Track
{

	/**
	 * @var array list of track elements. '0' is straight, '1' is curve
	 */
	public $track = [];
	/**
	 * @var int minimum length of series of elements
	 */
	public $elementMultiples = 40;
	/**
	 * @var int total number of elements of the track
	 */
	public $totalElements = 2000;
	/**
	 * @var int position of the last element on the track
	 */
	public $lastPos;


	public function __construct()
	{
		$type = 0;
		for ($pos = 0; $pos < $this->totalElements; $pos++) {
			if ($this->isSectionChange($pos)) {
				$type = rand(0, 1);
			}
			$this->track[$pos] = $type;
		}
		$this->lastPos = $this->totalElements - 1;
		print_r($this->track);
	}

	public function isSectionChange($pos): bool
	{
		return $pos % $this->elementMultiples == 0;
	}

	public function isCurveOrStraight($pos): bool
	{
		return $this->track[$pos];
	}
}
