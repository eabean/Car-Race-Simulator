<?php
class Track
{

	public static $track = [];
	public static $sectionLength = 40;
	public static $totalElements = 2000;

	public function __construct()
	{
		$type = 0;
		for ($pos = 0; $pos < $this->totalElements; $pos++) {
			if ($this->isSectionChange($pos)) {
				$type = rand(0, 1);
			}
			$element = new Element($type, $pos);
			$this->track[$pos] = $element;
		}
		foreach ($this->track as $element) {
			echo print_r($element) . "\n";
		}
	}

	public function isSectionChange($pos)
	{
		return $pos % $this->sectionLength == 0;
	}

	public function getTypeFromPosition($pos)
	{
		return $this->track[$pos]->type;
	}
}
