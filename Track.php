<?php
class Track
{
	/**
	 * @var array of Elements
	 */
	public $elements = [];
	public $elementLength = 40;
	public $totalElements = 2000;

	public function __construct()
	{
		for ($i = 0; $i < $this->totalElements; $i += $this->elementLength) {
			$element = new Element($i);
			$this->elements[$i] = $element;
		}
		foreach ($this->elements as $element) {
			echo "Element: " . print_r($element) . "\n";
		}
	}
}
