<?php

class Weakness {
	public $type;
	public $multi;

	public function __construct($type, $multi) {
		$this->type = $type;
		$this->multi = $multi;
	}
}