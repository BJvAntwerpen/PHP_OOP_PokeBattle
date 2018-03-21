<?php

class Charmeleon extends Pokemon {
	public $type;
	public $HP = 60;
	public $health = 60;
	public $attacks;
	public $weakness;
	public $resistance;

	public function __construct($name) {
		$this->type = new Type('Fire');
		$this->attacks = array(new Attack('Head Butt', 10), new Attack('Flare', 30));
		$this->weakness = new Weakness('Water', 2);
		$this->resistance = new resistance('Electric', -10);
		parent::__construct($name, $this->type, $this->HP, $this->health, $this->attacks, $this->weakness, $this->resistance);
	}
}