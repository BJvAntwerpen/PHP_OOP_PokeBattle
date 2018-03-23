<?php

class Pokemon {
	public $name;
	public $type;
	public $hp;
	public $attacks;
	public $weakness;
	public $resistance;

	public function __construct($name, $type, $hp, $attacks, $weakness, $resistance) {
		$this->name = $name;
		$this->type = $type;
		$this->hp = $hp;
		$this->attacks = $attacks;
		$this->weakness = $weakness;
		$this->resistance = $resistance;
	}

	public function __toString() {
		return json_encode($this);
	}

	public function attack($attack, $other) {
		$dmg = $attack->attackDmg;
		if ($this->type->type == $other->weakness->type) {
			$dmg = ($attack->attackDmg) * ($other->weakness->multi);
		} else if ($this->type->type == $other->resistance->type) {
			$dmg = ($attack->attackDmg) + ($other->resistance->reduce);//reduce is a negative value
		}
		$other->hp -= $dmg;
		return $dmg;
	}

}