<?php

class Pikachu extends Pokemon {

	public function __construct($name) {
		$type = new Type('Electric');
		$attacks = array(new Attack('Electric Ring', 50), new Attack('Pika Punch', 20));
		$weakness = new Weakness('Fire', 1.5);
		$resistance = new resistance('Steel', -20);
		$name = $name;
		$hp = 60;

		parent::__construct($name, $type, $hp, $attacks, $weakness, $resistance);
	}
}