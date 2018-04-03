<?php

class Type {

	const FIRE = 'Fire';
	const ELECTRIC = 'Electric';
	const WATER = 'Water';
	const STEEL = 'Steel';

	public $type;

	public function __construct($type) {
		$this->type = $type;
	}
}