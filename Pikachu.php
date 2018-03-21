<?php

class Pikachu extends Pokemon {
	public $type;
	public $HP = 60;
	public $health = 60;
	public $attacks;
	public $weakness;
	public $resistance;

	public function __construct($name) {
		$this->type = new Type('Electric');
		$this->attacks = array(new Attack('Electric Ring', 50), new Attack('Pika Punch', 20));
		$this->weakness = new Weakness('Fire', 1.5);
		$this->resistance = new resistance('Steel', -20);
		parent::__construct($name, $this->type, $this->HP, $this->health, $this->attacks, $this->weakness, $this->resistance);
	}
}