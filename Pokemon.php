<?php

class Pokemon {
	public $name;
	public $type;
	public $hp;
	public $attacks;
	public $weakness;
	public $resistance;

	public function __construct($name, $type, $HP, $health, $attacks, $weakness, $resistance) {
		$this->name = $name;
		$this->type = $type;
		$this->hp = $hp;
		$this->health = $health;
		$this->attacks = $attacks;
		$this->weakness = $weakness;
		$this->resistance = $resistance;
	}

	public function __toString() {
		return json_encode($this);
	}
	public function calcWeakness() {}
	public function calcResistance() {}
	public function calcDmg() {}
}