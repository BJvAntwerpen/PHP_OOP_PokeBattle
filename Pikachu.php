<?php

class Pikachu extends Pokemon {

	public function __construct($name) {
		$this->type = new Type('Electric');
		$this->attacks = array(new Attack('Electric Ring', 50), new Attack('Pika Punch', 20));
		$this->weakness = new Weakness('Fire', 1.5);
		$this->resistance = new resistance('Steel', -20);
		$this->name = $name;
		$this->hp = 60;
	}
}