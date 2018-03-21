<?php

class Charmeleon extends Pokemon {
	public $name;
	public $type;
	public $hp;
	public $attacks;
	public $weakness;
	public $resistance;

	public function __construct($name) {
		$this->type = new Type('Fire');
		$this->attacks = array(new Attack('Head Butt', 10), new Attack('Flare', 30));
		$this->weakness = new Weakness('Water', 2);
		$this->resistance = new resistance('Electric', -10);
		$this->name = $name;
		$this->hp = 60;
	}
}