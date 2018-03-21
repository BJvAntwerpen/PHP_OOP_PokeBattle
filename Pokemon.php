<?php

class Pokemon {
	public $name;
	public $type;
	public $HP;
	public $attacks;
	public $weakness;
	public $resistance;

	public function __construct($name, $type, $HP, $health, $attacks, $weakness, $resistance) {
		$this->name = $name;
		$this->type = $type;
		$this->HP = $HP;
		$this->health = $health;
		$this->attacks = $attacks;
		$this->weakness = $weakness;
		$this->resistance = $resistance;
	}

	public function __toString() {
		return json_encode($this);
	}
}