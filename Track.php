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
		$position = 0;
		for ($i = 0; $i < $this->totalElements; $i++, $position += $this->elementLength) {
			$element = new Element($position);
			$this->elements[$i] = $element;
		}
		// foreach ($this->elements as $element) {
		// 	print_r($element);
		// }
	}
}
